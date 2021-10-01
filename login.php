
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
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
<form method="post" action="welcome.php">
    <h1>email</h1>
    <input name="email" type="text">
    <h1>password</h1>
    <input name="password" type="text">
    <input type="submit" value="login">
</form>
</body>
</html>

<?php
session_start();
if (isset($_SESSION['u']) == 0) {
    $_SESSION = [];
}
?>