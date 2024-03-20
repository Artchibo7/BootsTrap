<?php

require_once __DIR__ . "./../class/task.php";
require_once __DIR__ . "./../repository/tasksRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['name']) &&
    isset($_POST['description']) &&
    isset($_POST['date']) &&
    isset($_POST['priorities']) &&
    isset($_POST['categories'])
) {
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['date']);
    $priority = htmlspecialchars($_POST['priorities']);
    $category = htmlspecialchars($_POST['categories']);

    $newTask = new Task(
        null,
        $name,
        $description,
        $date,
        $priorities,
        $categories
    );

    $taskRepository = new TaskRepository();

    $taskRepository->create($newTask);

    header('Location: ./../index.php');
}