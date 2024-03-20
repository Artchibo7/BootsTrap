<?php

require_once __DIR__ . "./../class/database.php";
require_once __DIR__ . "./../class/task.php";

class taskRepository extends Db {

    public function getAll() {
        $data = $this->getDb()->query("SELECT * FROM task");

        $task = [];

        foreach ($data as $taskData) {
            $newTask = new Task(
                $taskData['id'],
                $taskData['title'],
                $taskData['description'],
                $taskData['date'],
                $taskData['priority'],
                $taskData['categories']
            );

            $task[] = $newTask;
        }

        return $task;
    }

    public function create($newTask) {
        $request = "INSERT INTO task (title, description, date, priority, categories) VALUES (?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newTask->getTitle(),
            $newTask->getDescription(),
            $newTask->getDate(),
            $newTask->getPriority(),
            $newTask->getCategories()
        ]);
    }

    public function update($task) {
        $request = "UPDATE task SET title = ?, description = ?, date = ?, priority = ?, categories = ? WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getDate(),
            $task->getPriority(),
            $task->getCategories(),
            $task->getId()
        ]);
    }

    public function delete($taskId) {
        $request = "DELETE FROM task WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([$taskId]);
    }
}
