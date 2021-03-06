<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Restaurante;
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
            
                return redirect(route('cuenta'))->with('success','Datos actualizados correctamente');
            }else{
                return redirect(route('cuenta'))->with('error','La contraseña no coincide');
            }                

    }

    public function DatosRestaurante(Request $request){

        $restaurante=Restaurante::all();   
        //$user = DB::table('users')->where(['email'=>$email])->get();
        
        $this->validate($request,[
            'password'=>'required',
            'password2'=>'required',
        ]);

            if($request->password == $request->password2){
                foreach($restaurante as $res){
                    $res->password = Hash::make($request->password);
         
                    $res->save();
    
                }                      
            
                return redirect(route('cuenta_restaurante'))->with('success','Datos actualizados correctamente');
            }else{
                return redirect(route('cuenta_restaurante'))->with('error','La contraseña no coincide');
            }                

    }
}
