<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$logger = new Logger('zxc');
$logger->pushHandler(new StreamHandler('../log/app.log', Logger::DEBUG));
//$logger->info('hiiiiiii');

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../Framework/Router/router.php';
$RouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $RouteFound = true;
        break;
    }
}
if (!$RouteFound) {
    echo 'Страница не найдена!';
    return;
}
$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];
unset($matches[0]);
$controller = new $controllerName();
$controller->$actionName(...$matches);

?>
<script src="js/main.js"></script>
