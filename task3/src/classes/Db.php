<?php

namespace classes;

use PDO;

final class Db {

    private static $instance = null;
    private $connection;
    private $stmt;

    private function __construct()
    {
    }

    public static function getInstance() 
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getConnection($db_config) 
    {
        $dsn = $db_config['dsn'];
        $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        return $this;
    }

    public function query($sql, $params=[]) 
    {
        $this->stmt = $this->connection->prepare($sql);
        $this->stmt->execute($params);
        return $this;
    }

    function findAll()
    {
        return $this->stmt->fetchAll();
    }
}