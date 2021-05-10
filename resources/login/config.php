<?php
define('USER', 'diegogarcia');
define('PASSWORD', 'diegogarcia');
define('HOST', 'localhost');
define('DATABASE', 'login');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>