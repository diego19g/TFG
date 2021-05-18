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

    public function ModificarDatos(Request $request){
        $email = session('email');   
        $user = DB::table('users')->where(['email'=>$email])->get();
               
            if($request->password == $request->password2){
                $user->name = $request->nombre;
                $user->surname = $request->apellido;
                $user->password = Hash::make($request->password);
     
                $user->save();

                return view('prueba')->with(['datos'=>$user]);
            }else{
               echo "La contraseña no coincide";
            }

        
        

    }
}
