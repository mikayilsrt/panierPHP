<?php

namespace App\Controllers;

/**
 * Controller class.
 */
class Controller {

    /**
     * Return the view of the page.
     * @param  [type] $path [description]
     * @return [type]       [description]
     */
    static function view ($path) {
        return "App/Views/" . $path . ".php";
    }

}
