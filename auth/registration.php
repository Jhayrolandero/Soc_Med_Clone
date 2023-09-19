<?php

include "app/controller/User_Controller.php";
$user_obj = new User_Controller();

if(!empty($_SESSION["username"])){
    include "index.php";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/register.css">
    <title>GeekHub</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center example m-0 p-0 full-height-container bg-dark example">
                <div class="col-md-3 custom-bg full-height-col">
                    <div class="col-md-12 p-3 ">
                        <form method="post" class="row" id="login">
                            <?=$user_obj->show_login();?>
                        </form>
                        <form method="post" id="register">
                        <?=$user_obj->show_registration();?>
                        </form>
                    </div>
                </div>
                <div class="col-9">
                    <div class="login-bg">
                        <img src="assets/images/login-bg.jpeg" alt="">
                    </div>
                </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php require "scripts/user.php";?>
</body>
</html>
