<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php include '../App/View/Layouts/header.php';?>
    <div class="main">
        <div class="productlist" id="app">
            <product-list/>
        </div>
    </div>
</div>
<?php include '../App/View/Layouts/footer.php';?>
<script src="js/main.js"></script>
</body>
</html>