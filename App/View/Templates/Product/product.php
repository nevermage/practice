<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php include '../App/View/Layouts/header.php';?>
    <div class="maincontent2">
        <div class="productcontent">
            <div class="productimage">
                <img src="img/<?= $product->getImage() ?>" alt="img unavailable">
            </div>
            <div class="productinfo">
                <h1 class="productinfoname"><?= $product->getName() ?></h1>
                <br>
                <hr class="productinfohr">
                <div class="productinfobottombar">
                    <table>
                        <tr>
                            <td>
                                <span class="productinfoprice"><?= $product->getPrice() ?></span>
                                <span class="currensysymbol">&nbsp;uah</span>
                            </td>
                            <td class="buttoncell">
                                <button class="productinfocartbutton"
                                        onclick="addToCart(<?= $product->getId() ?>)">
                                    To cart</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include '../App/View/Layouts/footer.php';?>
</body>
<script src="js/main.js"></script>
</html>