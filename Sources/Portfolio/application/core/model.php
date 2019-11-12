<?php

class Model {

    public function get_category() {
        return $this->getList("SELECT * FROM `category`");
    }

    public function get_img($category_id = '') {

        if (!empty($category_id))
            return $this->getList("SELECT * FROM `images` WHERE `category_id`='".$category_id."'");
        else
            return $this->getList("SELECT * FROM `images`");
    }

    public function getConnection() {
        $connection = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
        $connection->exec("SET NAMES '".DB_CHARSET."'");
        return $connection;
    }
    
    public function getRecord($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetch() : [];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    public function getList($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetchAll() : [];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    public function executeDML($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $statement->closeCursor();
        $connection = null;
    }    
}