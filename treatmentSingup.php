<?php

require_once __DIR__ . "/class/User.php";
require_once __DIR__ . "/repository/UsersRepository.php";

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

    // if ($password !== $passwordConfirm) {
    //     header('Location: ./../createUser.php');
    //     exit();
    // }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header('Location: ./../createUser.php');
    //     exit();}

        $hashPassword = password_hash($password, PASSWORD_BCRYPT);

        $newUser = new User(
            null,
            $firstname,
            $lastname,
            $email,
            $hashPassword
        );
    


    $userRepository = new UserRepository();

    $userRepository->create($newUser);

    header('Location: ./../index.php');
}
