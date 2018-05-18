<?php
class ModelLogin extends Database {

    public function addUser($firstname, $lastname, $email, $password) {
        return $this->execute("INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password)", [':firstname' => $firstname, ':lastname' => $lastname,
            ':email' => $email, ':password' => $password]);

    }

    public function getUsers() {
        return $this->query("SELECT * FROM `users`");
    }

    public function isExistEmail($email) {
        return $this->query("SELECT * FROM `users` WHERE `email` = :email", [':email' => $email]);
    }
}