<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../repository/taskRepository.php";
class Task {
    private $title;
    private $description;
    private $date;
    private $priorities;
    private $categories;

    public function __construct($title, $description, $date, $priorities, $categories) {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->priorities = $priorities;
        $this->categories = $categories;    
    }

  
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }



    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getPriorities() {
        return $this->priorities;
    }

    public function setPriorities($priorities) {
        $this->priorities = $priorities;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
    }

}
