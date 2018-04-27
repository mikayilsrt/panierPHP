<?php

namespace App\Models;

use \PDO;

/**
 * Model class.
 */
class Model {

    /**
     * Query sql.
     * @param  [type] $statment [description]
     * @return [type]           [description]
     */
    static function query ($statment) {
        global $db;
        $req = $db->getPDO()->query($statment);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}
