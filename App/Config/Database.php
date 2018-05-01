<?php

namespace App\Config;

use \PDO;

/**
 * Class Database
 * @package App\Config
 */
class Database {

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_password;
    private $pdo;

    /**
     * Database constructor.
     * @param $db_name
     * @param string $db_host
     * @param string $db_user
     * @param string $db_password
     */
    public function __construct ($db_name, $db_host = "localhost", $db_user = "root", $db_password = "") {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    /**
     * Connection to the data base.
     * @return PDO
     */
    public function getPDO () {
        if ($this->pdo === null) {
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
    }

}
