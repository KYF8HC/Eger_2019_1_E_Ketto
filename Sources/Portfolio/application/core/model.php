<?php
class Model {
    public function get_user() {
        return $this->getRecord("SELECT * FROM `user` WHERE `id` =".$_SESSION['user_id']);
    }
    
    public function get_text() {
        return $this->getList("SELECT * FROM `text`");
    }
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
    public function getList($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetchAll() : $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    public function getRecord($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetch() : $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    public function getField($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetch() : $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        return $result[0];
    }
    
    
    public function executeDML($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        if (!$success) $result = $statement->errorInfo()[2];
        $statement->closeCursor();
        $connection = null;
        if (!$success) return $result;
    }    
}