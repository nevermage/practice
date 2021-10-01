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
<form method="post">
<!--    <input type="submit" action="--><?php //header('Location: logout.php');?><!--" value="logout">-->
</form>
</body>
</html>

<?php
session_start();
$e='123';
$p='321';
    if ($_POST['email'] == $e && $_POST['password'] == $p) {
        $_SESSION['u'] = $_POST['email'];
    }
else{
    header('Location: login.php');
}

?>