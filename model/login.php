<?php
class ModelLogin extends Database {

    public function addUser($firstname) {
        return $this->execute("INSERT INTO `users` (`firstname`) VALUES (':firstname')");
//        bindParam(':firstname', $firstname);
        $this->bindParam(':firstname', $firstname);

//       return $this->execute("INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES ()");
//       $this->
//       //bindParam(':firstname', $firstname);
//       $this->bindParam(':lastname', $lastname);
//       $this->bindParam(':email', $email);
//       $this->bindParam(':password', $password);
    }

    public function getUsers() {
        return $this->query("SELECT * FROM `users`");
    }
}