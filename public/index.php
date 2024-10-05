<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

// Instantiate the router.
$router = new Router();
// Get routes
require basePath('routes.php');
// Get URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Route to specific controller
$router->route($uri);
