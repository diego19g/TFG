<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function ShowForm(){
        return view('login');
    }


    public function ComprobarLogin(Request $req){
        $email=$req->input('email');
        $password=$req->input('password');

        $checkLogin=DB::table('users')->where(['email'=>$email,'password'=>$password])->get();

        if(count($checkLogin) >0){
            echo "Login successfull ";

            print_r($req->input());
        }else{
            echo 'Login failed';
        }
        
    }
}
