<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../Public/style.css">
</head>
<body onload="">
<div class="container">
    <?php include '../App/View/Layouts/header.php';?>
    <div class="loginform">
        <div style="display: block;" class="loginformcontainer">
            <br><span>login:</span>
            <br><input id="loginphone" type="text" class="logintextarea" maxlength="10">
            <br><span>password:</span>
            <br><input id="loginformpword" type="password" class="logintextarea">
            <button onclick="login()" class="loginbtn">enter</button>
        </div>
    </div>
</div>
<?php include '../App/View/Layouts/footer.php';?>
</body>
</html>
