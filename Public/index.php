<?php
include_once '../Framework/Database/products.php';
include_once '../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Classes\User;
$logger = new Logger('zxc');
$logger->pushHandler(new StreamHandler('../log/app.log', Logger::DEBUG));

//$logger->info('3');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
<body onload="">

<div class="container">
    <?php include '../App/View/Layouts/header.php';?>
    <div class="main">
        <div class="productlist">
            <ul>
                <?php
                foreach ($products as $id => $pr){
                    echo '
                <li class="card">
                    <div class="cardimagenbox">
                        <a href="product.php"><img src="apple.jpg" alt=""></a>
                    </div>
                    <a class="cardtitle" href="product.php">'.$pr.'</a>
                    <div class="cardbot">
                        <span>40 uah</span>
                        <button onclick="" class="productcardcartbutton">to cart</button>
                    </div>
                </li>
                    ';
                }

                $u1 = new User('Tom');
                $u1->getName();
                ?>
            </ul>
        </div>
    </div>
</div>
<?php include '../App/View/Layouts/footer.php';?>
</body>
</html>
