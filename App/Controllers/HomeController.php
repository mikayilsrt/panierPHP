<?php

namespace App\Controllers;

use App\Models\Clothes;

/**
 * HomeController class.
 */
class HomeController extends Controller{

    /**
     * Return the home page.
     * @return [type] [description]
     */
    public function index () {
        $query = new Clothes();
        $clothes = $query->clothesAll();
        require Controller::view("home/index.view");
    }

}
