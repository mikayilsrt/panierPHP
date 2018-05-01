<?php

namespace App\Controllers;

use App\Models\Clothes;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends Controller{

    /**
     * Return the home page.
     */
    public function index () {
        $query = new Clothes();
        $clothes = $query->clothesAll();
        require Controller::view("home/index.view");
    }

}
