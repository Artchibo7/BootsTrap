<?php
require_once __DIR__ . "/../class/Database.php";
require_once __DIR__ . "/../repository/UsersRepository.php";


class User {

    private  $userID;
    private  $firstname;
    private  $lastname;
    private  $email;
    private  $password;

    public function __construct( $userID, $firstname, $lastname, $email, $password) {
        $this->userID = $userID;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        
    }

    public function getFirstname() {
        return $this->firstname;
    }
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get the value of userID
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set the value of userID
     */
    public function setUserID($userID): self
    {
        $this->userID = $userID;

        return $this;
    }
}
