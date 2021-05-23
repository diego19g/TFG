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
        $user=User::where('email',$email)->get();   
        //$user = DB::table('users')->where(['email'=>$email])->get();
        
        $this->validate($request,[
            'nombre'=>'required|regex:/^[a-zA-Z\s]+$/',
            'apellido'=>'required|regex:/^[a-zA-Z\s]+$/', 
            'password'=>'required',
            'password2'=>'required',
        ]);

            if($request->password == $request->password2){
                foreach($user as $us){
                    $us->name = $request->nombre;
                    $us->surname = $request->apellido;
                    $us->password = Hash::make($request->password);
         
                    $us->save();
    
                }                      
            
                return redirect(route('cuenta'));
            }else{
               echo "La contraseña no coincide";
            }                

    }
}
