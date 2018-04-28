<?php

use \App\Controllers\HomeController;

use \App\Controllers\ProductsController;

use \App\Config\Database;

require "vendor/autoload.php";

$db = new Database("e-commerce");

$page = htmlspecialchars($_GET['page']);

if(!empty($page) || $page == "home") {

    switch ($page):
        case "home":
            $homeController = new HomeController();
            $homeController->index();
            break;
        case "products":
            $productsController = new ProductsController();
            $productsController->index();
            break;
        case ("show") && !empty($_GET['id']):
            $productsController = new ProductsController();
            $productsController->show(htmlspecialchars($_GET['id']));
            break;
        default:
            die("ERROR 404! root");
    endswitch;

} else {
    $root = $_SERVER['REQUEST_URI'] . "?page=home";
    header("Location: " . $root);
}
