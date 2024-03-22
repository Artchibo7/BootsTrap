<?php
session_start();
require_once "./repository/UsersRepository.php" ;
$userRepository = new UserRepository();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js" defer></script>
    <script src="./assets/todolist.js" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ToDoList!!!</title>
</head>

<body>
    <?php
    if (isset($_SESSION['connected'])) {
        include "./composant/addtask.php";
        include "./composant/listedestaches.php";
        include "./composant/bouton.php";
        include "./composant/ToastTooltips.php";
        include "./composant/myAccount.php";

    } else {
        include "./composant/nawbar.php";
    }
    ?>
</body>
</html>
