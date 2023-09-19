<?php
session_start();

if (!isset($_SESSION["username"])){
    include "auth/registration.php";
    exit();
}

require_once("config/Router.php");
Router::handle('GET', "/contact", "app/views/contact.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <ul>
        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="/about">About</a></li>
        <li><a class="nav-link" href="contact">Contact</a></li>
    </ul>
    <div id="view-container"></div>
</body>
</html>