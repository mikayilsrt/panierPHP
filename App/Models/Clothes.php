<?php

namespace App\Models;

/**
 * Class Clothes
 * @package App\Models
 */
class Clothes extends Model{

    /**
     * Require all products.
     * @return array
     */
    public function clothesAll () {
        $datas = Model::query("SELECT * FROM clothes");
        return $datas;
    }

    /**
     * Require one product.
     * @param $id
     * @return array
     */
    public function oneClothe ($id) {
        $data  = Model::query("SELECT * FROM clothes WHERE id = $id");
        return $data;
    }

    /**
     * Collect all products from the basket.
     * @param $ids
     * @return array
     */
    public function BinClothe ($ids) {
        $data  = Model::query('SELECT * FROM clothes WHERE id IN ('.implode(',', $ids).')');
        return $data;
    }

}
