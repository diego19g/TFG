<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{       
    public function ShowForm(){
        return view('login');
    }
 
    public function ComprobarLogin(Request $req){
        $email=$req->input('email');
        $password=$req->input('password');

        $checkLogin=DB::table('users')->where(['email'=>$email])->get();

        if(count($checkLogin) >0){ 
            $hash=DB::table('users')->where(['email'=>$email])->first();            
            if(Hash::check($password,$hash->password)){
                session(['email' => $email]);
                return redirect(route('home_cliente'));
            }   else{
                \Alert::message('Email o contraseña incorrectos', 'danger');
                return view('login');
            }

        }else{
            $checkLogin2=DB::table('restaurantes')->where(['name'=>$email])->get();

            if(count($checkLogin2) >0){ 
                $hash=DB::table('restaurantes')->where(['name'=>$email])->first();            
                if(Hash::check($password,$hash->password)){
                    session(['email' => $email]);
                    return redirect(route('home_restaurante'));
                }   else{
                    echo "'Login failed'";
                }
    
            }else{
                echo "'Login failed'";
            }
        }
        
    }
    public function CogerNombre(){           
        $e = session('email');  
        $nombre=DB::table('users')->where(['email'=>$e])->first();
        return view('cliente.home_cliente')->with('nombre',$nombre->name);
        
    }
}
