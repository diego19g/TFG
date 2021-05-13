<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

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
            session(['email' => $email]);
            return redirect(route('home_cliente'));
        }else{
            echo 'Login failed';
        }
        
    }
    public function CogerNombre(){           
        $e = session('email');
        $sql = "SELECT name FROM users WHERE email=?";
        $nombre=DB::statement($sql,array($e));
        //$nombre=DB::select('SELECT name FROM users WHERE email="'.$e.'"');
        return view('cliente.home_cliente')->with('nombre',$nombre);
        
    }
}
