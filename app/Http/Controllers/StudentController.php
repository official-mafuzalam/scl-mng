<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_add(){
        return view('student_add');
    }

    public function student_addReq(Request $request){
        
        echo "<pre>";
        print_r($request->toArray());
    }

    public function student_allPage(Request $request){
        
        return view('student_all');

    }
}
