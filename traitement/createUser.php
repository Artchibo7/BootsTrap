<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../class/users.php";
require_once __DIR__ . "./../repository/usersRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['passwordConfirm'])
) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);



    $newUser = new User(
        null,
        $firstname,
        $lastname,
        $email,
        $password
    );

    if ($password !== $passwordConfirm) {
        header('Location: ./../createUser.php');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ./../createUser.php');
        exit();
    }

    $newUser->setPassword(password_hash($password, PASSWORD_BCRYPT));

    $userRepository = new UserRepository();

    $userRepository->create($newUser);

    header('Location: ./../treitement.php');
}

