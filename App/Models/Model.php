<?php

namespace App\Models;

use \PDO;

/**
 * Class Model
 * @package App\Models
 */
class Model {

    /**
     * Query sql.
     * @param $statment
     * @return array
     */
    static function query ($statment) {
        global $db;
        $req = $db->getPDO()->query($statment);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}
