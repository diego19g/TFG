<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatosController extends Controller
{
    public function index(){
        $email = session('email');  
        $datos=DB::table('users')->where(['email'=>$email])->first();
        return view('cliente.cuenta')->with('datos',$datos);  
    }

    public function ModificarDatos(Request $request,User $user){

        if($request->password != $request->password2){
            return view('cliente.cuenta')->with('datos',$datos)->with('mensaje', 'La contraseña no coincide!');  
        }else{
            $user->name = $request->nombre;
            $user->surname = $request->apellido;
            $user->email = $request->email;
            $user->password=Hash::make($request->password);
            $user->save();
    
            return view('cliente.cuenta')->with('datos',$datos)->with('mensaje', 'Usuario modificado!');  
        }

    }
}
