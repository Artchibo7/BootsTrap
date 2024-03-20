<?php

require_once __DIR__ . "./../class/databse.php";
require_once __DIR__ . "./../class/priority.php";

class prioritiesRepository extends Db {
    public function getAll() {
        $data = $this->getDb()->query("SELECT * FROM priorities");

        $priorities = [];

        foreach ($data as $priorityData) {
            $newPriority = new Priority(
                $priorityData['id'],
                $priorityData['normal'],
                $priorityData['important'],
                $priorityData['urgent']
            );

            $priorities[] = $newPriority;
        }

        return $priorities;
    }

    public function create($newPriority) {
        $request = "INSERT INTO priorities (id, name) VALUES (?, ?)";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newPriority->getId(),
            $newPriority->getNormal(),
            $newPriority->getImportant(),
            $newPriority->getUrgent()
        ]);
    }

    public function update($priority) {
        $request = "UPDATE priorities SET name = ? WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $priority->getUrgent(),
            $priority->getImportant(),
            $priority->getNormal(),
            $priority->getId()
        ]);
    }

    public function delete($priorityId) {
        $request = "DELETE FROM priorities WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([$priorityId]);
    }
}
