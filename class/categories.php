<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../repository/categoriesRepository.php";

class Categories{
    private $id;
    private $personal;
    private $work;
    private $family;
    private $friends;


    public function __construct($id, $personal, $work, $family, $friends) {
        $this->id = $id;
        $this->personal = $personal;
        $this->work = $work;
        $this->family = $family;
        $this->friends = $friends;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getpersonal() {
        return $this->personal;
    }

    public function setpersonal($personal) {
        $this->personal = $personal;
    }

    public function getwork() {
        return $this->work;
    }

    public function setwork($work) {
        $this->work = $work;
    }

    public function getfamily() {
        return $this->family;
    }

    public function setfamily($family) {
        $this->family = $family;
    }

    public function getfriends() {
        return $this->friends;
    }

    public function setfriends($friends) {
        $this->friends = $friends;
    }
}