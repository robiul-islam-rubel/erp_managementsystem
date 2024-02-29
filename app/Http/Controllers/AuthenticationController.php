<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Advertisement;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index() {
        $data = Advertisement::find(3);
        return view('index',compact('data'));
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
        if ( ($find == "233404") && ( $pass == "accounts123") ) {
            return view('account.home');
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

    public function payment(Request $request) {
        $newpayment = new Payment;
        $newpayment->semester = $request->semester;
        $newpayment->stdid = $request->stdid;
        $newpayment->amount = $request->amount;
        $newpayment->method = $request->method;
        $newpayment->save();

        return view('account.home');

    }

    public function mypayment() {
        $data = Payment::find(2191081008);
        return view('payment',compact('data'));
    }

    public function addadvertisement(Request $request) {
        $data = new Advertisement;
        $data->advertisement = $request->advertisement;
        $data->save();

        return redirect()->back();

    }

   public function advertisement() {

    return view('admin.addadvertisement');
   }

  
}
