<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Advertisement;
use App\Models\Faculty;
use App\Models\Mark;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthenticationController extends Controller
{
    public function index() {
        $data = Advertisement::latest()->first();
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
        $data->add_desc = $request->add_desc;
        $data->title1 = $request->title1;
        $data->title2 = $request->title2;
        $data->save();

        return redirect()->back();

    }

   public function advertisement() {

     return view('admin.addadvertisement');
   }
// get faculty data from api
   public function get_faculty(Request $request) {
        // $api_url = 'https://634e48b9f34e1ed826874c92.mockapi.io/rubel/faculty';
        // $response = Http::get($api_url);
        // $data = json_decode($response->body(),true);
        // $data = (array)$data;
        // foreach ($data as $faculty) {
        //     $newFaculty = new Faculty;
        //     $newFaculty->name = $faculty['name'];
        //     $newFaculty->acronym = $faculty['acronym'];
        //     $newFaculty->designation = $faculty['designation'];
        //     $newFaculty->mobile = $faculty['mobile'];
        //     $newFaculty->email = $faculty['email'];
        //     $newFaculty->social = $faculty['social'];
        //     $newFaculty->save();
        // }
        $search = $request['search'] ?? "";
        if( $search != "" ) {
              $data = Faculty::where('name','LIKE',"%$search%")->get();
        }
        else {
            $data = Faculty::all();
        }
        return view('faculty',compact('data','search'));
   }

   public function marks() {
      
       return view('marks');
   }

   public function create_marks (Request $request) {
            $new_info = new Mark;
            $new_info->std_id = '2191081008';
            $new_info->name = 'Md. Robiul Islam';
            $new_info->batch = '47';
            $new_info->attn = $request['attn'];
            $new_info->viva = $request['viva'];
            $new_info->quiz = $request['quiz'];
            $new_info->assign = $request['assign'];
            $new_info->mid = $request['mid'];
            $new_info->final = $request['final'];
            $new_info->save();

            $data = Mark::all();
            if ($data =="") {
                return view('marks','data=>""');
            }
            else {
                return view('marks',compact('data'));
            }

   }

  
}
