<?php

namespace App\Controllers;

use App\Models\Clothes;

/**
 * BinController class.
 */
class BinController extends Controller {

    /**
     * Constructor of the class BinController.
     */
    public function __construct () {
        if (!isset($_SESSION)) {
            \session_start();
        }
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
    }

    public function addPanier ($id, $amount) {
        $_SESSION['panier'][$id] = $amount;
    }

    public function delAllPanier () {
        if ($_SESSION['panier']) {
            unset($_SESSION['panier']);
        }
    }

    /**
     * [getPanier description]
     * @return [type] [description]
     */
    public function getPanier () {

        if (isset($_POST['delBin'])) {
            $this->delAllPanier();
        }

        if (!empty($_SESSION['panier'])) {

            $ids = \array_keys($_SESSION['panier']);

            $productController = new Clothes();
            $products = $productController->BinClothe($ids);

        } else {
            $products = array();
        }

        require Controller::view("panier/index.view");
    }

}
