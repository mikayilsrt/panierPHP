<?php

namespace App\Controllers;

use App\Models\Clothes;

use App\Controllers\BinController;

/**
 * Class ProductsController
 * @package App\Controllers
 */
class ProductsController extends Controller {

    /**
     * Return the show page.
     * @param int $id
     */
    public function index (int $id) {
        $products = new Clothes();
        $product = $products->oneClothe($id);

        if(!$product):
            die("Ce produit n'existe pas.");
        endif;

        if(isset($_POST['submit'])):
            $amount = \htmlspecialchars($_POST['amount']); // quantité

            $addProduct = new BinController();
            $addProduct->addPanier($id, $amount);
        endif;

        require Controller::view("products/index.view");
    }

}
