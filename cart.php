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

        <header>
            <a class="logobutton" href="http://test2.nl/">Store</a>
            <div class="headerloadbuttons">
                <a class="cartbutton" href="http://test2.nl/cart.php">
                    <svg class="carticon" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    <p>7</p>
                </a>
                <div class="accountdropdown">
                    <a class="accountbutton" href="http://test2.nl/login.php">
                        <svg class="accounticon" viewBox="0 0 17 17"><path d="M9 1C4.58 1 1 4.58 1 9s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 2.75c1.24 0 2.25 1.01 2.25 2.25S10.24 8.25 9 8.25 6.75 7.24 6.75 6 7.76 3.75 9 3.75zM9 14.5c-1.86 0-3.49-.92-4.49-2.33C4.62 10.72 7.53 10 9 10c1.47 0 4.38.72 4.49 2.17-1 1.41-2.63 2.33-4.49 2.33z"/></svg>
                        <p>login/reg</p>
                    </a>
                </div>
            </div>
        </header>
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
                <div class="checkoutcontainer">
                    <div class="checkoutcontainerheader">
                        <h1>Оформление заказа</h1>
                    </div>
                    <div class="checkoutformcontainer">
                        <div class="checkoutform">
                            <span>Номер телефона:</span>
                            <br><input type="text" class="checkouttextarea" placeholder="0999999999" name="">
                            <br><span>ФИО получателя:</span>
                            <br><input type="text" class="checkouttextarea" placeholder="Иванов Иван Иванович" name="">
                            <br><span>Адрес доставки:</span>
                            <br><input type="text" class="checkouttextarea" placeholder="Харьков, ул. Сумская 18, кв 36" name="">
                            <br><span>Комментарий:<span style="font-size: 10px; color: #555;">(необязательно)</span> 
                            <br><input type="text" class="checkouttextarea" placeholder="Ваш комментарий" name="">
                            <br><button onclick="a()" class="acceptorderbutton">Подтвердить заказ</button>
                        </div>
                        <div class="checkoutdeliuveryandpayment">
                            <h2>Доставка и оплата</h2>
                            <p>Доставка осуществляется методом наложенного платежа 
                                перевозчиком "Новая почта", с помощью которого и производится 
                                оплата заказа, которая происходит после получения вашего товара.
                                Отправка осуществляется в течении двух рабочих дней, доставка 
                                по украине до трех рабочих дней, с помощью которого и производится 
                                оплата заказа, которая происходит после получения вашего товара.
                                с помощью которого и производится 
                                оплата заказа, которая происходит после получения вашего товара.
                                с помощью которого и производится 
                                оплата заказа, которая происходит после получения вашего товара.
                            </p>
                        </div>
                    </div>
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
                <button class="gotocheckoutbutton" onclick="f()">Order</button>
            </div>
        </div>
    </div>
</div>
    <footer>
        <div style="text-align: center;"class=""><a class="logobutton" href="">Store</a></div>
        <div class="footercontacts">
            <h3>Contacts</h3>
            <p>+380954783874</p>
            <p>shop@gmail.com</p>
            <p>Kharkiv</p>
        </div>
        <div class="footernavigation">
            <h3>Categories</h3>
            <a href="">Category 1</a>
            <br>
            <a href="">Category 2</a>
        </div>
    </footer>
</body>
</html>
