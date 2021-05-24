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
                return redirect(route('login'))->with('error','Contraseña incorrecta');
            }

        }else{
            $checkLogin2=DB::table('restaurantes')->where(['name'=>$email])->get();

            if(count($checkLogin2) >0){ 
                $hash=DB::table('restaurantes')->where(['name'=>$email])->first();            
                if(Hash::check($password,$hash->password)){
                    session(['email' => $email]);
                    return redirect(route('home_restaurante'));
                }   else{
                    return redirect(route('login'))->with('error','Email o contraseña incorrectos');
                }
    
            }else{
                return redirect(route('login'))->with('error','Email o contraseña incorrectos');
            }
        }
        
    }
    public function CogerNombre(){           
        $e = session('email');  
        $nombre=DB::table('users')->where(['email'=>$e])->first();
        return view('cliente.home_cliente')->with('nombre',$nombre->name);
        
    }
}
