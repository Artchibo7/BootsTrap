<?php
session_start();
require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/repository/UsersRepository.php';


if (!empty($_POST) && isset($_POST['userID'])) {
    $userID = htmlspecialchars($_POST['userID']);

    $userRepository = new UserRepository();

    $userRepository->delete($userID);
    echo "User deleted successfully.";
} else {
    echo "Invalid request.";
}
