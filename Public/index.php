<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../Framework/Database/products.php';
require '../vendor/autoload.php';
require __DIR__ . '/../Framework/Router/router.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use App\Controller\MainController;

$logger = new Logger('zxc');
$logger->pushHandler(new StreamHandler('../log/app.log', Logger::DEBUG));

//$logger->info('hiiiiiii');

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
        <?php
        if (isset($_GET['route'])) {
            $route = $_GET['route'];
            $pattern = '~^hello/(.*)$~';
            preg_match($pattern, $route, $matches);
            if (!empty($matches)) {
                $controller = new MainController();
                $controller->sayhello($matches[1]);
            }

            $pattern2 = '~^$~';
            preg_match($pattern2, $route, $matches);

            if (!empty($matches)) {
                $controller2 = new MainController();
                $controller2->zxc();
                return;
            }
        }
        $routes
        ?>
        <div class="productlist">
            <ul>
                <?php
                foreach ($products as $id => $pr) {
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
                ?>
            </ul>
        </div>
    </div>
</div>
<?php include '../App/View/Layouts/footer.php';?>
</body>
</html>
