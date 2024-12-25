<?php
// класс для подключения к БД с помощью PDO

class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "oopphp16";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // установка режима выборки результатов в виде ассоциативного массива, если не устанавливать будет по дефолту PDO::FETCH_BOTH, который получает информацию в виде ОБЫЧНОГО индексированного массива
        return $pdo;
    }
}
