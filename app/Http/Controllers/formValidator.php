<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_record;
use App\Models\staff_record;
class formValidator extends Controller
{
	function validation_form()
	{
		return view('formValidation');
	}
    function validating_student(Request $req)
    {
    	$req->validate([
    		'email'=>'required',
    		'password'=>'required | min:4 | max:8'
       	]);
        $email = student_record::where(['email'=>$req->email])->first();
        $password = student_record::where(['password'=>$req->password])->first();
        if($email && $password)
        {
          return redirect('profile');
        }
        else
        {
          echo "<span style = 'color:red;'>username or password didn't match</span>";
        }
        // echo $password;
       	// $req->session()->put('email',$req->input('email'));
       	// $get = $req->session()->get('email');
       	// echo $get;
       	// $forget = $req->session()->pull('email',null);
       	// if ($req->session()->has('email')) {
       	// 	echo "true";
       	// }
       	// else
       	// {
       	// 	echo "false";
       	// }
    }


    //for sttaff
    function validating_staff(Request $req)
    {
      $req->validate([
        'email'=>'required',
        'password'=>'required | min:4 | max:8'
        ]);
        $email_staff = staff_record::where(['email'=>$req->email])->first();
        $password_staff = staff_record::where(['password'=>$req->password])->first();
        if($email_staff && $password_staff)
        {
          return redirect('staff_profile');
        }
        else
        {
          echo "<span style = 'color:red;'>username or password didn't match</span>";
        }
        // $req->session()->put('email',$req->input('email'));
        // $get = $req->session()->get('email');
        // echo $get;
        // $forget = $req->session()->pull('email',null);
        // if ($req->session()->has('email')) {
        //   echo "true";
        // }
        // else
        // {
        //   echo "false";
        // }
      
    }

}
