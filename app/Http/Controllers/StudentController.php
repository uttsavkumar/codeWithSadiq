<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function manageStudent(Request $req){
       $data = [
        'student' => Student::where("status","1")->get(),
        'title' => 'Active'
       ];
        return view('Admin.manageStudent',$data);
    }
    public function newAdmission(){
        $data = [
            'student' => Student::where("status","0")->get(),
            'title' => "New Admission"
        ];
        return view('Admin.manageStudent',$data);
    }
    public function passOut(){
        $data = [
            'student' => Student::where("status","2")->get(),
            'title' => "Pass Out"
        ];
        return view('Admin.manageStudent',$data);
    }
}
