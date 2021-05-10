<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ShowForm(){
        return view('login');
    }


    public function ComprobarLogin(Request $req){
        $email=$req->input('email');
        $password=$req->input('password');

        redirect("home");
        
    }
}
