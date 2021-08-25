<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Models\account_clear;
use App\Models\bus_clear;
use App\Models\comp_clear;
use Illuminate\Support\Facades\DB;
use App\Models\lib_clear;
use App\Models\plab_clear;
use App\Models\student_requested;
use App\Models\student_status;
class getData extends Controller
{
    function get(Request $req)
    {
    	$test = new test;
    	$test->Name = $req->name;
    	$test->email = $req->email;
    	$test->password = $req->password;
    	$test->save();
    	return redirect('signUpPage');
    }

    //record fetching
    function fetch_data_acc()
    {
    	$account_data = account_clear::all();
    	$account_status = $account_data[0]->status;
    	$this->account_status = $account_status;
    	return view('staff_file/staff_acc',["std_data"=>$account_data]);
    }
    function fetch_data_bus()
    {
    	$bus_data = bus_clear::all();
    	return view('staff_file/staff_bus',["bus_data"=>$bus_data]);
    }
    function fetch_data_comp()
    {
    	$comp_data = comp_clear::all();
    	return view('staff_file/staff_comp',["std_data"=>$comp_data]);
    }
    function fetch_data_lib()
    {
    	$lib_data = lib_clear::all();
    	return view('staff_file/staff_lib',["std_data"=>$lib_data]);
    }
    function fetch_data_plab(Request $req)
    {
    	$plab_data = plab_clear::all();
    	echo $req->status;
    	return view('staff_file/staff_plab',["std_data"=>$plab_data]);
    }
    function changeStatus_std(Request $req)
    {
    	 $data = plab_clear::all();
    	  $change_status = plab_clear::find($req->status);    	 
    	 //  $change_status = $req->status;
    	 // $change_status->save();
    	return response()->json(['success'=>'Status changed successfully.']);
    }
    function student_requested_data()
    {
    	$req_data = student_requested::all();
    	$std_status = student_status::all();
    	return view('profile',['req_data'=>$req_data,'std_status'=>$std_status]);
    }

    function update_value_plab($id)
    {
        $physics_lab = new plab_clear;
        $status = DB::table('physics_lab')
                ->select('status')
                ->where('id','=',$id)
                ->first();

        //checking user status
        if($physics_lab['status'] == '1'){
        $status = '0';
    }else{
        $status = '1';
    }
    $values = array('status' => $status );
    DB::table('physics_lab')->where('id',$id)->update($values);
    //profile update
        $std_status = new student_status;
        DB::table('std_status')->where('id',$id)->update($values);
        if($std_status['status'] == '1')
        {
            $status1 = '0';
        }
       else
        {
            $status1 = '1';
        }

        $std_status = DB::table('std_status')
                ->select('status')
                ->where('id','=',5)
                ->first();
        $value1 = array('status' => $status1 );
        DB::table('std_status')->where('id',5)->update($value1);
    return redirect('staff_plab');
    }

    //updating account status
    function update_value_account($id)
    {
        $acc_lab = new account_clear;
        $status = DB::table('account')
                ->select('status')
                ->where('id','=',$id)
                ->first();

        //checking user status
        if($acc_lab['status'] == '1')
        {
            $status = '0';
        }
       else
        {
            $status = '1';
        }
        $values = array('status' => $status );
        DB::table('account')->where('id',$id)->update($values);
        //profile update
        $std_status = new student_status;
        DB::table('std_status')->where('id',$id)->update($values);
        if($std_status['status'] == '1')
        {
            $status1 = '0';
        }
       else
        {
            $status1 = '1';
        }

        $std_status = DB::table('std_status')
                ->select('status')
                ->where('id','=',1)
                ->first();
        $value1 = array('status' => $status1 );
        DB::table('std_status')->where('id',1)->update($value1);
        return redirect('staff_acc');
    }
    //updating bus status
    function update_value_bus($id)
    {
        $bus = new bus_clear;
        $status = DB::table('bus')
                ->select('status')
                ->where('id','=',$id)
                ->first();

        //checking user status
        if($bus['status'] == '1')
        {
            $status = '0';
        }
       else
        {
            $status = '1';
        }
        $values = array('status' => $status );
        DB::table('bus')->where('id',$id)->update($values);
        //profile update
        $std_status = new student_status;
        DB::table('std_status')->where('id',$id)->update($values);
        if($std_status['status'] == '1')
        {
            $status1 = '0';
        }
       else
        {
            $status1 = '1';
        }

        $std_status = DB::table('std_status')
                ->select('status')
                ->where('id','=',2)
                ->first();
        $value1 = array('status' => $status1 );
        DB::table('std_status')->where('id',2)->update($value1);
        return redirect('staff_bus');
    }

    //updating computer status
    function update_value_comp($id)
    {
        $comp = new comp_clear;
        $status = DB::table('computer_lab')
                ->select('status')
                ->where('id','=',$id)
                ->first();

        //checking user status
        if($comp['status'] == '1')
        {
            $status = '0';
        }
       else
        {
            $status = '1';
        }
        $values = array('status' => $status );
        DB::table('computer_lab')->where('id',$id)->update($values);
        //profile update
        $std_status = new student_status;
        DB::table('std_status')->where('id',$id)->update($values);
        if($std_status['status'] == '1')
        {
            $status1 = '0';
        }
       else
        {
            $status1 = '1';
        }

        $std_status = DB::table('std_status')
                ->select('status')
                ->where('id','=',3)
                ->first();
        $value1 = array('status' => $status1 );
        DB::table('std_status')->where('id',3)->update($value1);
        return redirect('staff_comp');
    }

    //updating library status
    function update_value_lib($id)
    {
        $library = new lib_clear;
        $status = DB::table('library')
                ->select('status')
                ->where('id','=',$id)
                ->first();

        //checking user status
        if($library['status'] == '1')
        {
            $status = '0';
        }
       else
        {
            $status = '1';
        }
        $values = array('status' => $status );
         DB::table('library')->where('id',$id)->update($values);
        //profile update
        $std_status = new student_status;
        DB::table('std_status')->where('id',$id)->update($values);
        if($std_status['status'] == '1')
        {
            $status1 = '0';
        }
       else
        {
            $status1 = '1';
        }

        $std_status = DB::table('std_status')
                ->select('status')
                ->where('id','=',4)
                ->first();
        $value1 = array('status' => $status1 );
        DB::table('std_status')->where('id',4)->update($value1);
        return redirect('staff_lib');
    }

    //profile part
    function request_value_account($id)
    {
        //requesting account depart
        $std_status = student_status::find($id);
        $account_data = new account_clear;
        $data = account_clear::find($id);
        $status = DB::table('account')
                        ->select('req_status')
                        ->where('id','=',$id)
                        ->first();
        if($data['req_status'] == 0)
        {
            $status = 1;
            $values = array('req_status' => $status );
            DB::table('account')->where('id',$id)->update($values);
        }
        if($std_status['req_status']==0)
        {
            $status = 1;
            $value  = array('req_status' => $status);
            DB::table('std_status')->where('id',$id)->update($value);

        }
        //requesting bus depart
        $bus_req = bus_clear::find(1);
        $status_bus = DB::table('bus')
                    ->select('req_status')
                    ->where('id', '=',1)
                    ->first();
        if($bus_req['req_status'] == 0)
        {
            $status_bus = 1;
            $values_bus = array('req_status' => $status_bus );
            DB::table('bus')->where('id',1)->update($values_bus);
        }
        //requesting computer depart
        $comp_req = comp_clear::find(1);
        $status_comp = DB::table('bus')
                    ->select('req_status')
                    ->where('id', '=',1)
                    ->first();
        if($comp_req['req_status'] == 0)
        {
            $status_comp = 1;
            $values_comp = array('req_status' => $status_comp );
            DB::table('computer_lab')->where('id',1)->update($values_comp);
        }
        //requesting library depart
        $lib_req = lib_clear::find(1);
        $status_lib = DB::table('library')
                    ->select('req_status')
                    ->where('id', '=',1)
                    ->first();
        if($lib_req['req_status'] == 0)
        {
            $status_lib = 1;
            $values_lib = array('req_status' => $status_lib );
            DB::table('library')->where('id',1)->update($values_lib);
        }

        //requesting computer depart\
        $plab_req = plab_clear::find(1);
        $status_plab = DB::table('physics_lab')
                    ->select('req_status')
                    ->where('id', '=',1)
                    ->first();
        if($plab_req['req_status'] == 0)
        {
            $status_plab = 1;
            $values_plab = array('req_status' => $status_plab );
            DB::table('physics_lab')->where('id',1)->update($values_plab);
        }

        return redirect('profile');


        
    }


}
