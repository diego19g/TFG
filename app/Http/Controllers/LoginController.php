<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include('config.php');
session_start();

class LoginController extends Controller
{
    public function ShowForm(){
        return view('login');
    }


    public function ComprobarLogin(){
        
 

        
    }
}
