<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){
        $data  = [
            'course' => Course::where('status',1)->get(),
        ];
        return view('HomePages.home',$data);
    }
    public function course(){
        $data['course'] = Course::where('status',1)->get();
        return view('HomePages.course',$data);
    }
    public function apply(Request $req){
        if($req->method() == 'POST'){
            $data = $req->validate([
                'name' => 'required',
                'fatherName' => 'required',
                'education' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
                'dob' => 'required',
            ]);
            // Student::create($data); to create directly with model 
            $p = new Student();

            $p->name = $req->name;
            $p->fatherName = $req->fatherName;
            $p->education = $req->education;
            $p->contact = $req->contact;
            $p->email = $req->email;
            $p->city = $req->city;
            $p->state = $req->state;
            $p->address = $req->address;
            $p->dob = $req->dob;
    
            $p->save();
            return redirect()->back();
        }
        return view('HomePages.apply');

    }
   
    public function contact(){

    }
    public function onlinepayment(Request $req){
       
        $data['std'] = [];
        
        if($req->method() == 'POST'){
            $p = Student::where('contact',$req->contact)->first();
            if($p){
                $data['std'] = Payment::where('student_id',$p->id)->get();
            }
        }
        return view('HomePages.paymentPage',$data);

    }
    public function order(Request $req)
    {
        
        $contact = $req->contact;
        $user = Student::where("contact",$contact)->first();
        $pay = Payment::find($req->pay_id);
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $pay->id,
          'user' => $user->id,
          'mobile_number' => $user->contact,
          'email' => $user->email,
          'amount' => $pay->amount,
          'callback_url' => 'http://localhost:8000/payment-call-back'
        ]);
        return $payment->receive();
    }
    public function paymentcallBack(){
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
            $order_id = $response['ORDERID'];
            $paymentRecord = Payment::find($order_id);
            $studentRecord = Student::find($paymentRecord->student_id);
            AdminController::makeCashPayment($studentRecord->id,$paymentRecord->id);
            return redirect()->back();

        }else if($transaction->isFailed()){
          echo "failed";
        }else if($transaction->isOpen()){
          echo "processing";
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }

}
