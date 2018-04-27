<?php

namespace App\Controllers;

/**
 * HomeController class.
 */
class ProductsController extends Controller {

    /**
     * Return the home page.
     * @return [type] [description]
     */
    public function index () {
        require Controller::view("products/index.view");
    }

}
