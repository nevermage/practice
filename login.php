<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<form action="test2.php" method="POST">
    <h1>email</h1>
    <input type="text" name="email">
    <h1>password</h1>
    <input type="text" name="password"><br>
    <button onclick="login()">login</button>
</form>


</body>
</html>

<?php
session_start();
$_SESSION['u'] = '';
echo $_GET['password'];
