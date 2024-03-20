<?php

require_once __DIR__ . "./../config.php";
require_once __DIR__ . "./../class/users.php";
require_once __DIR__ . "./../class/task.php";
require_once __DIR__ . "./../class/priorities.php";
require_once __DIR__ . "./../class/categories.php";

Class Db{
    private $db;

    public function __construct(){
        try{
            $this->db = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .
                DB_USER,
                DB_PASSWORD
            );
        }catch(PDOException $error){
            die("Erreur:" . $error->getMessage());
            echo "Connexion échouée";
        }
    }

    public function getDb(){
        return $this->db;
    }
};
