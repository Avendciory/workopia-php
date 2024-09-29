<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');
// Instantiate the router.
$router = new Router();
// Get routes
require basePath('routes.php');
// Get URI and REQUEST METHOD
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// Route to specific controller
$router->route($uri, $method);
