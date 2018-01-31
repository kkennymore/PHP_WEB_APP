<?php

class DB {
    public function __construct($db_type,$host, $user, $pass, $dbname,$db_charset) {
        $this->connection = new PDO("{$db_type}:host=" . $host . ";dbname=" . $dbname, $user, $pass);
        //$this->connection = new mysqli($host, $user, $pass, $dbname)
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->query("SET NAMES {$db_charset}");

        if (!$this->connection) {
            throw new Exception('Could not connect to database');
        }
    }

    public function prepare($sql) {
        if (!$this->connection) {
            return false;
        }

        $result = $this->connection->prepare($sql);
        
        $result->execute();
        return $result;
    }

}
