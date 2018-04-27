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

}
