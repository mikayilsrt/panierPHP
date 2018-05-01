<?php

namespace App\Controllers;

/**
 * Class Controller
 * @package App\Controllers
 */
class Controller {

    /**
     * Return the view of the page.
     * @param $path
     * @return string
     */
    static function view ($path) {
        return "App/Views/" . $path . ".php";
    }

}
