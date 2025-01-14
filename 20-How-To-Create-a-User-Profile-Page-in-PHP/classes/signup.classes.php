<?php

class Signup extends Dbh
{
    // Внесение uid, пароля и email в БД
    protected function setUser($uid, $pwd, $email)
    {
        $query = 'INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);';
        $stmt = $this->connect()->prepare($query);

        // Хэшируем пароль перед вставкой в БД
        $options = [
            'cost' => 12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
        if (!$stmt->execute([$uid, $hashedPwd, $email])) { // Проверка на false c БД
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed"); // Отправляем на индекс с GET запросом о ошибке
            exit();
        }
        $stmt = null;
    }

    // Проверка uid и email в БД
    protected function checkUser($uid, $email)
    {
        $query = 'SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;';
        $stmt = $this->connect()->prepare($query);

        // Проверки на ошибку
        if (!$stmt->execute([$uid, $email])) { // Проверка на false c БД
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed"); // Отправляем на индекс с GET запросом о ошибке
            exit();
        }

        // Проверка на совпадение имени пользователя и почты в БД, если есть совпадение мы не будем повторно его регистрировать
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}