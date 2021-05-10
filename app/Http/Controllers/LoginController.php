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
        
 
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
         
            $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();
         
            $result = $query->fetch(PDO::FETCH_ASSOC);
         
            if (!$result) {
                echo '<p class="error">Username password combination is wrong!</p>';
            } else {
                if (password_verify($password, $result['PASSWORD'])) {
                    $_SESSION['user_id'] = $result['ID'];
                    echo '<p class="success">Congratulations, you are logged in!</p>';
                } else {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }
            }
        
    }
}
