<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Course;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function registration(Request $request) {
        $newuser = new Registration;
        $newuser->name = $request->name;
        $newuser->stdid=$request->stdid;
        $newuser->password = $request->password;
        $newuser->conformpassword = $request->conformpassword;
        $newuser->save();
        return view('login');
    }
    public function authentication(Request $request) {
        $user = new Registration;
        $find = $request->input('user_id');
        $pass = $request->input('user_password');
        $data = Registration::find($find);

        if(($find== "admin123" ) && ( $pass == "admin123")) {
            return view('adminhome',compact('data'));

        }
        if (( $data->stdid == $find ) && ( $data->password == $pass )) {
            return view('home',compact('find','data'));
        }
     
    }

    public function addcourse() {
        return view('admin.addcourse');
    }

    public function newcourse(Request $request) {
        $newcourse = new Course;
        $newcourse->course_name = $request->course_name;
        $newcourse->course_code = $request->course_code;
        $newcourse->course_credit = $request->course_credit;
        $newcourse->batch = $request->batch;
        $newcourse->section = $request->section;
        $newcourse->faculty_id = $request->faculty_id;
        $newcourse->save();
        return view('adminhome');
    } 

    public function mycourse() {
        $data = Course::find(1);
        return view('course',compact('data'));
    }

  
}
