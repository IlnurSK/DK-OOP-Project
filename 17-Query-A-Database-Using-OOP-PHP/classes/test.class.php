<?php

// Взаимодействие с БД, тестовый класс

class Test extends Dbh // Расширяем с классом Dbh, для подключения к БД
{
    // Метод получения пользователя с БД
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br>';
        }
    }

    // Метод получения пользователя с БД с пользовательским вводом
    public function getUsersStmt($firstname, $lastname)
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['users_dateofbirth'] . '<br>';
        }
    }

    // Метод внесения пользователя с БД с пользовательским вводом
    public function setUsersStmt($firstname, $lastname, $dob)
    {
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) 
        VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    }
    
}