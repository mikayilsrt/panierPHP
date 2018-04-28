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

    public function show ($id) {
        require Controller::view("products/show.view");
    }

}
