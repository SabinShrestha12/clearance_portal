<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Models\user;

class update_data extends Controller
{
    function updating_data($id)
    {
    	$data = test::find($id);
    	return view('update',['data'=>$data]);
    }
    function updated(Request $req)
    {
    	$data = test::find($req->id);
    	$data->Name = $req->name;
    	$data->email = $req->email;
    	$data->save();
    	return redirect('list1');
    }
    function deleteData($id)
    {
    	$value = test::find($id);
    	$value->delete();
    	return redirect('list1');
    }
    function updating1($id)
    {
    	$data = user::find($id);
    	return view('update1',["data"=>$data]);
    }
    function updated1(Request $req)
    {
    	$data = user::find($req->id);
    	$data->fname = $req->name;
    	$data->lname = $req->email;
    	$data->save();
    	return redirect('list');
    }
    function deleted1($id)
    {
    	$del_data = user::find($id);
    	$del_data->delete();
    	return redirect('list');
    }
}
