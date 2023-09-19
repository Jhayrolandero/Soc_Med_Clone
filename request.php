<?php
include "app/controller/User_Controller.php";
$user_obj = new User_Controller();

if(isset($_POST['register'])){
    $jsonData = json_decode($_POST['register']);

    $user_obj->check_email("adasds");
    
    include "php/user/add_user.php";    
}

if(isset($_POST["login"])){
    $jsonData = json_decode($_POST["login"]);

    include "php/user/validate_user.php"; 
}
