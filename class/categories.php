<?php

class Categories{
    private $id;
    private $personnel;
    private $travail;
    private $famille;
    private $amis;


    public function __construct($id, $personnel, $travail, $famille, $amis) {
        $this->id = $id;
        $this->personnel = $personnel;
        $this->travail = $travail;
        $this->famille = $famille;
        $this->amis = $amis;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getPersonnel() {
        return $this->personnel;
    }

    public function setPersonnel($personnel) {
        $this->personnel = $personnel;
    }

    public function getTravail() {
        return $this->travail;
    }

    public function setTravail($travail) {
        $this->travail = $travail;
    }

    public function getFamille() {
        return $this->famille;
    }

    public function setFamille($famille) {
        $this->famille = $famille;
    }

    public function getAmis() {
        return $this->amis;
    }

    public function setAmis($amis) {
        $this->amis = $amis;
    }
}