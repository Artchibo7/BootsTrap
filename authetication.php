<?php
session_start();

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../class/user.php";


$Database = new Db();

if(isset($_POST["mail"]) && isset($_POST["password"]) && !empty($_POST["mail"]) && !empty($_POST["password"])) {

    $user = $Db->getThisUtilisateurByMail($_POST["mail"]);
    if($user) {
        if(password_verify($_POST["password"], $user->getPassword())) {
            $_SESSION["connecté"] = true;
            $_SESSION["user"] = serialize($user);
            header("location: config.php");
            die;
        }
    }

}

header("location: connexion.php?erreur");
die;