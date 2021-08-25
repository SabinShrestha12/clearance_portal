<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seson extends Controller
{
    function getData(Request $req)
    {
    	$store = $req->input('email');
    	$req->session()->put('email',$store);
    	return redirect('session_success');
    }
}
