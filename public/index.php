<?php 
    require_once '../assets/core/Router.php';

    $url = $_GET['url'] ?? '';
    $router = new Router();
    $router->dispatch($url);
?>