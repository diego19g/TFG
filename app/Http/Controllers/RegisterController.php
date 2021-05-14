<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function RegistrarUsuario(Request $request){
        $user=new User();

        $user->name=$request->nombre;
        $user->surname=$request->apellido;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

    }
}
