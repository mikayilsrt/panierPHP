<?php

namespace App\Models;

/**
 * Clothes class extends of model.
 */
class Clothes extends Model{

    /**
     * Require all products.
     * @return [type] [description]
     */
    public function clothesAll () {
        $datas = Model::query("SELECT * FROM clothes");
        return $datas;
    }

    /**
     * Require one product.
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function oneClothe ($id) {
        $data  = Model::query("SELECT * FROM clothes WHERE id = $id");
        return $data;
    }

    public function BinClothe ($ids) {
        $data  = Model::query('SELECT * FROM clothes WHERE id IN ('.implode(',', $ids).')');
        return $data;
    }

}
