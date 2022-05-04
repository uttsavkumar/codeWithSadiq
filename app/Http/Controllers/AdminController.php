<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use DateTime;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function approveStd($id)
    {
        $std = Student::find($id);
        $std->status = "1";
        $std->save();
        return redirect()->route('admin.manageStudent.newAd');
    }
    public function deleteStd($id)
    {
        $std = Student::find($id);
        $std->delete();
        return redirect()->route('admin.manageStudent.newAd');
    }
    public function passout($id)
    {
        $std = Student::find($id);
        $std->status = "2";
        $std->save();
        return redirect()->route('admin.manageStudent.passOut');
    }

    //generate payment
    public function generatePayment()
    {
        $students = Student::where("status", "1")->get();
        $now = new DateTime();

        foreach ($students as $student) {
            $dateOfJoin = new DateTime($student->created_at);
            $start_year = $dateOfJoin->format("Y");
            $nowYear = $now->format("Y");

            for ($year = $start_year; $year <= $nowYear; $year++) {
                if ($start_year == $nowYear) {
                    $start_month = $dateOfJoin->format('m');
                    $end_month = $now->format('m');
                } elseif ($year == $start_year) {
                    $start_month = $dateOfJoin->format('m');
                    $end_month = 12;
                } elseif ($year == $nowYear) {
                    $start_month = 01;
                    if ($now->format('d') > $dateOfJoin->format('d')) {
                        $end_month = $now->format('m');
                    } else {
                        $end_month = $now->format('m') - 1;
                    }
                } else {
                    $start_month = 01;
                    $end_month = 12;
                }

                for ($month = $start_month; $month <= $end_month; $month++) {
                    $result = new DateTime("$year-$month-" . $dateOfJoin->format('d'));
                    $newDate = $result->format('Y-m-d');
                    $student_id = $student->id;

                    $payment = Payment::where([["student_id", $student_id], ['due_date', $newDate]])->get();

                    if ($payment->count() == 0) {
                        $newPay = new Payment();
                        $newPay->student_id = $student_id;
                        $newPay->amount = 700;
                        $newPay->due_date = $newDate;
                        $newPay->save();
                    }
                }
            }
        }
    }

    public function dashboard()
    {
        $this->generatePayment();
        $data['countStudent'] = Student::all()->count();
        $data['due_payment'] = Payment::all();

        return view('Admin.dashboard', $data);
    }
    static public function makeCashPayment( $std_id, $id){
        $std = Student::find($std_id);

        if($std){
            $payment = Payment::where([["student_id",$std->id],["id",$id]])->first();
            $payment->status = 'paid';
            $payment->save();

        }
        return redirect()->route("admin.dashboard");
    }
}
