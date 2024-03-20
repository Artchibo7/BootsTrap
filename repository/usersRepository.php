<?php

require_once __DIR__ . "./../class/databse.php";
require_once __DIR__ . "./../class/user.php";
require_once __DIR__ . "./../class/priorities.php";
require_once __DIR__ . "./../class/categories.php";


class userRepository extends Db {
    public function getAll() {
        $data = $this->getDb()->query("SELECT * FROM users");

        $users = [];

        foreach ($data as $userData) {
            $newUser = new User(
                $userData['id'],
                $userData['firstname'],
                $userData['lastname'],
                $userData['email'],
                $userData['password']
            );

            $users[] = $newUser;
        }

        return $users;
    }

    public function create($newUser) {
        $request = "INSERT INTO users (id, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newUser->getId(),
            $newUser->getFirstname(),
            $newUser->getLastname(),
            $newUser->getEmail(),
            $newUser->getPassword()
        ]);
    }

    public function update($user) {
        $request = "UPDATE users SET firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $user->getFirstname(),
            $user->getLastname(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getId()
        ]);
    }

    public function delete($userId) {
        $request = "DELETE FROM users WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([$userId]);
    }
}
