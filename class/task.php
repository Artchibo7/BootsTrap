<?php

class Task {
    private $title;
    private $description;
    private $date;
    private $priority;
    private $categories;

    public function __construct($title, $description, $date, $priority, $categories) {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->priority = $priority;
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

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
    }

}
