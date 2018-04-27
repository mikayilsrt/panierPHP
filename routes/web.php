<?php

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
