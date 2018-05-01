<?php

namespace App\Controllers;

use App\Models\Clothes;

/**
 * Class BinController
 * @package App\Controllers
 */
class BinController extends Controller {

    /**
     * BinController constructor.
     */
    public function __construct () {
        if (!isset($_SESSION)) {
            \session_start();
        }
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
    }

    /**
     * Function that add a product on the basket
     * @param $id
     * @param $amount
     */
    public function addPanier ($id, $amount) {
        $_SESSION['panier'][$id] = $amount;
    }

    /**
     * Function that remove all sessions from the basket.
     */
    public function delAllPanier () {
        if ($_SESSION['panier']) {
            unset($_SESSION['panier']);
        }
    }

    /**
     * Function that remove a product from the basket.
     */
    public function dellOnePanier($id) {
        if ($_SESSION['panier'][$id]) {
            unset($_SESSION['panier'][$id]);
        }
    }

    /**
     * Function that displays the basket.
     */
    public function getPanier () {

        if (isset($_POST['delOneBin'])) { // Remove a product.
            $this->dellOnePanier(\htmlspecialchars($_POST['id']));
        }

        if (isset($_POST['delBin'])) { // Remove all product.
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
