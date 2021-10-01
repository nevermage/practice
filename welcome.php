<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
</head>
<body style="">
<style>
    body{
        background: #373947;
        color: #f5f5f5;
        font-family: calibri;
    }
    table{
        color: #000;
    }
</style>
<h1>welcome</h1>
<a href="logout.php">logout</a>
</body>
</html>

<?php
session_start();
$email='123';
$password='321';
if(isset($_POST['email']) == true) {
    if ($_POST['email'] == $email && $_POST['password'] == $password) {
        $_SESSION['u'] = $_POST['email'];

    }
    else{
        header('Location: login.php');
    }
}

?>