<?php

use \App\Controllers\HomeController;
use \App\Config\Database;

require "vendor/autoload.php";

$db = new Database("e-commerce");

if(!empty($_GET['page']) || $_GET['page'] == "home") {

    switch ($_GET['page']):
        case "home":
            $homeController = new HomeController();
            $homeController->index();
            break;
    endswitch;

} else {
    $root = $_SERVER['REQUEST_URI'] . "?page=home";
    header("Location: " . $root);
}
