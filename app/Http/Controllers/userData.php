<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\user;
use App\Model\dtabase;
class userData extends Controller
{
    function SignUpData()
    {
    	return view('created');
    }
    function createdData(Request $req)
    {
    	
    	print_r($req->input());
    	return view('success');
    }
}
