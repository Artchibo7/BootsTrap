<?php

require_once __DIR__ . "/../class/Database.php";
require_once __DIR__ . "/../class/User.php";
// require_once __DIR__ . "./../class/priorities.php";
// require_once __DIR__ . "./../class/categories.php";


class UserRepository extends Database {
    public function getAll() {
        $data = $this->getDB()->query("SELECT * FROM todo_users");

        $users = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['userID'],
                $user['firstname'],
                $user['lastname'],
                $user['email'],
                $user['password']
            );

            $users[] = $newUser;
        }

        return $users;
    }

    public function create($newUser) {
        $request = "INSERT INTO todo_users (userID, firstname, lastname, email, password) VALUES (:userID, :firstname, :lastname, :email, :password)";
        $query = $this->getDB()->prepare($request);

        $query->execute([
            ":userID" => $newUser->getUserID(),
            ":firstname" => $newUser->getFirstname(),
            ":lastname" => $newUser->getLastname(),
            ":email"  => $newUser->getEmail(),
            ":password" => $newUser->getPassword(),
        ]);
    }

    public function update($user) {
        $request = "UPDATE users SET firstname = ?, lastname = ?, email = ?, password = ? WHERE id = ?";
        $query = $this->getDB()->prepare($request);

        $query->execute([
            $user->getFirstname(),
            $user->getLastname(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getUserID()
        ]);
    }
    public function delete($userID)
{
    // Assuming $_SESSION['user'] holds the userID
    $request = 'DELETE FROM todo_users WHERE userID = :userID';

    $query = $this->getDB()->prepare($request);

    $query->execute([
        'userID' => $_SESSION['user'] 
    ]);
}
}
