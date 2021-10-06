<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="">
    <div class="container">
        <?php include '../App/View/Layouts/header.php';?>
    <div class="cartmaincontent">
        <div class="cartcontenttopbar">
            <span>Cart</span>
        </div>
        <div class="maincartcontent">
            <div class="leftcartcontainer">
                <div class="carttablecontainer">
                    <table class="cartcontainertable">
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Count</th>
                            <th>Sum</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td class="cartimagecontainer"><img src="img/apple.jpg" alt=""></td>
                            <td class="cartproductname"><a href="">Productname</a></td>
                            <td class="cartpricecontainer"><span>40 </span><span class="cartcurrencysymbol">uah</span></td>
                            <td class="cartcountcontainer"><button class="cartcountbutton">-</button><span class="cartproductcounter">3</span><button class="cartcountbutton">+</button></td>
                            <td class="cartpricecontainer"><span>120 </span><span class="cartcurrencysymbol">uah</span></td>
                            <td><button class="checkoutdeletefromcartbutton">delete</button></td>
                        </tr>
                        <tr>
                            <td class="cartimagecontainer"><img src="img/apple.jpg" alt=""></td>
                            <td class="cartproductname"><a href="">Productname</a></td>
                            <td class="cartpricecontainer"><span>40 </span><span class="cartcurrencysymbol">uah</span></td>
                            <td class="cartcountcontainer"><button class="cartcountbutton">-</button><span class="cartproductcounter">3</span><button class="cartcountbutton">+</button></td>
                            <td class="cartpricecontainer"><span>120 </span><span class="cartcurrencysymbol">uah</span></td>
                            <td><button class="checkoutdeletefromcartbutton">delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="precheckoutcontainer">
                <div class="precheckoutheader">
                    <span class="precheckoutleft">Goods in cart:</span>
                    <span class="precheckoutright">4</span>
                </div>
                <div class="precheckoutdatacontainer">
                    <div class="precheckoutrow">
                        <span class="precheckoutleft">Sum:</span>
                        <span class="precheckoutright">2899&nbsp;<span class="cartcurrencysymbol">uah</span></span>
                    </div>
                </div>
                <button class="gotocheckoutbutton" onclick="()">Order</button>
            </div>
        </div>
    </div>
</div>
    <?php include '../App/View/Layouts/footer.php';?>
</body>
</html>