<?php

namespace App\Controllers;

use App\Models\Clothes;

/**
 * HomeController class.
 */
class ProductsController extends Controller {

    /**
     * Return the show page.
     * @return [type] [description]
     */
    public function index (int $id) {
        $products = new Clothes();
        $product = $products->oneClothe($id);
        require Controller::view("products/index.view");
    }

}
