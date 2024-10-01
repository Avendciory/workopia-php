<?php
require '../helpers.php';
require basePath('Framework/Database.php');
require basePath('Framework/Router.php');
// Instantiate the router.
$router = new Router();
// Get routes
require basePath('routes.php');
// Get URI and REQUEST METHOD
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
// Route to specific controller
$router->route($uri, $method);
