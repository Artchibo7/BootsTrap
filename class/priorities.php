<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../repository/priorityRepository.php";

class Priority {
    private $id;
    private $normal;
    private $important;
    private $urgent;

    public function __construct($id, $normal, $important, $urgent) {
        $this->id = $id;
        $this->normal = $normal;
        $this->important = $important;
        $this->urgent = $urgent;
    }

    public function getId() {
        return $this->id;
    }

    public function getNormal() {
        return $this->normal;
    }

    public function setNormal($normal) {
        $this->normal = $normal;
    }

    public function getImportant() {
        return $this->important;
    }

    public function setImportant($important) {
        $this->important = $important;
    }

    public function getUrgent() {
        return $this->urgent;
    }

    public function setUrgent($urgent) {
        $this->urgent = $urgent;
    }
}
