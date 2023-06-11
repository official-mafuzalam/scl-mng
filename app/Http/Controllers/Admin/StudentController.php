<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentController extends Controller
{


    public function student_add()
    {
        return view('student_add');
    }

    public function student_addReq(Request $request)
    {

        $random_num = null;
        do {
            $random_num = rand(10000, 99999);
        } while (DB::table('students')->where('user_id', $random_num)->exists());

        $student = new Student;

        $student->user_id = $random_num;
        $student->student_name = $request['student_name'];
        $student->student_nid = $request['student_nid'];
        $student->student_email = $request['student_email'];
        $student->student_mobile = $request['student_mobile'];
        $student->father_name = $request['father_name'];
        $student->father_nid = $request['father_nid'];
        $student->father_mobile = $request['father_mobile'];
        $student->mother_name = $request['mother_name'];
        $student->mother_nid = $request['mother_nid'];
        $student->mother_mobile = $request['mother_mobile'];
        $student->student_gender = $request['student_gender'];
        $student->address_street = $request['address_street'];
        $student->address_postOffice = $request['address_postOffice'];
        $student->address_upazila = $request['address_upazila'];
        $student->address_zila = $request['address_zila'];
        $student->student_class = $request['student_class'];
        $student->student_roll = $request['student_roll'];
        $student->student_reg = $request['student_reg'];
        $student->student_reg = $request['student_reg'];
        $student->password = $request['password'];
        $student->inserter_id = "100000";

        $student->save();


        // Show success notification
        session()->flash('success', 'New Student add successfully.');


        // Mail to Student for confirmation
        $email = $request['student_email'];

        $data = [
            'user_id' => $random_num,
            'student_name' => $request['student_name'],
            'student_nid' => $request['student_nid'],
            'student_email' => $request['student_email'],
            'student_mobile' => $request['student_mobile'],
            'father_name' => $request['father_name'],
            'father_nid' => $request['father_nid'],
            'father_mobile' => $request['father_mobile'],
            'mother_name' => $request['mother_name'],
            'mother_nid' => $request['mother_nid'],
            'mother_mobile' => $request['mother_mobile'],
            'student_gender' => $request['student_gender'],
            'address_street' => $request['address_street'],
            'address_postOffice' => $request['address_postOffice'],
            'address_upazila' => $request['address_upazila'],
            'address_zila' => $request['address_zila'],
            'student_class' => $request['student_class'],
            'student_roll' => $request['student_roll'],
            'student_reg' => $request['student_reg'],
            'password' => $request['password']
        ];

        Mail::send('mail.student_admission', $data, function ($message) use ($email) {
            $message->to($email)
                ->subject('Admission Confirmation');
        });

        return redirect()->route('home');



















        // echo "<pre>";
        // print_r($request->toArray());
    }

    public function student_allPage(Request $request)
    {

        $students = Student::paginate(2);

        $data = compact('students');

        return view('student_all')->with($data);

    }




}