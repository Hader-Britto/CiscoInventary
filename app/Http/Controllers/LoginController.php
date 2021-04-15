<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Login;
use Session;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function LoginIndex(){
        return view('login.index');
    }

    public function LoginAuth(Request $request){
    	
    		$data = $request->input();
            $adminCount = Login::where(['username' => $data['username'],'password'=>md5($data['password']),'status'=>1])->count();
            if($adminCount > 0){
                //echo "Success"; die;
                Session::put('adminSession', $data['username']);
                return redirect('/inventory');
        	}else{
                //echo "failed"; die;
                return redirect('/')->with('flash_message_error','User Or Password Incorrect');
        	}
    }

    public function Logout(){
        Session::flush();
        return redirect('/')->with('flash_message_success', 'Logged out successfully');
    }
}
