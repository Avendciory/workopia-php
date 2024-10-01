<?php
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

/*spl_autoload_register(function ($class) {
    $path = basePath('Framework/' . $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});
*/

// Instantiate the router.
$router = new Router();
// Get routes
require basePath('routes.php');
// Get URI and REQUEST METHOD
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
// Route to specific controller
$router->route($uri, $method);
