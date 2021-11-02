<?php

namespace app\models;

use app\models\Connection;
use PDO;

class Model
{
    private $db;
    protected $table;

    public function __construct()
    {
        $this->db = Connection::connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
