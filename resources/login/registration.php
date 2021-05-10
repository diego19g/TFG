<?php
 include('config.php');
 session_start();
  
 if (isset($_POST['register'])) {
  
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password_hash = password_hash($password, PASSWORD_BCRYPT);
  
     $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
     $query->bindParam("email", $email, PDO::PARAM_STR);
     $query->execute();
  
     if ($query->rowCount() > 0) {
         echo '<p class="error">The email address is already registered!</p>';
     }
  
     if ($query->rowCount() == 0) {
         $query = $connection->prepare("INSERT INTO users(NOMBRE,APELLIDO,EMAIL,PASSWORD) VALUES (:nombre,:apellido,:email,:password_hash)");
         $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
         $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
         $query->bindParam("email", $email, PDO::PARAM_STR);
         $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);         
         $result = $query->execute();
  
         if ($result) {
             echo '<p class="success">Your registration was successful!</p>';
         } else {
             echo '<p class="error">Something went wrong!</p>';
         }
     }
 }
 
?>