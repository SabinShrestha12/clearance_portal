<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\dtabase;
use App\Models\test;
class users extends Controller
{
    function list()
    {
        $data = user::all();
    	return view('userlist',["data"=>$data]);
    }
    function loginData()
    {
    	return view('login');
    }
    /*function logData(Request $req)
    {
    	print_r($req->input());
    }*/
    //configurating database using model
    function fetchData()
    {
        $data = test::all();
        return view('userlist1',['values'=>$data]);
    }
    function fetching()
    {
        return dtabase::all();
    }
}
