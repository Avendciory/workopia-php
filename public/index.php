<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

// Instantiate the router.
$router = new Router();
// Get routes
require basePath('routes.php');
// Get URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Route to specific controller
$router->route($uri);
