<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class DatosController extends Controller
{
    public function index(){
        $email = session('email');  
        $datos=DB::table('users')->where(['email'=>$email])->first();
        return view('cliente.cuenta')->with('datos',$datos);  
    }
}
