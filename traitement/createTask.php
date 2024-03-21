<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../class/task.php";
require_once __DIR__ . "./../repository/tasksRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['title']) &&
    isset($_POST['description']) &&
    isset($_POST['date']) &&
    isset($_POST['priorities']) &&
    isset($_POST['categories'])
) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['date']);
    $priority = htmlspecialchars($_POST['priorities']);
    $category = htmlspecialchars($_POST['categories']);

    $newTask = new Task(
        null,
        $title,
        $description,
        $date,
        $priorities,
        $categories
    );

    $taskRepository = new TaskRepository();

    $taskRepository->create($newTask);

    header('Location: ../index.php');
}