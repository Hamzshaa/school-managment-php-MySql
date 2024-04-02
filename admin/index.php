<?php 
    ob_start();
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
    else{
        echo "Welcome to the admin panel";
    }
 ?>