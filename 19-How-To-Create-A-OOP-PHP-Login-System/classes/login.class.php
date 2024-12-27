<?php

class Login extends Dbh
{
    // Внесение uid, пароля и email в БД
    protected function getUser($uid, $pwd)
    {
        // Запрос на получение пароля с БД
        $query = 'SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;';
        $stmt = $this->connect()->prepare($query);

        // Проверка на false c БД
        if (!$stmt->execute([$uid, $uid])) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed"); // Отправляем на индекс с GET запросом о ошибке
            exit();
        }

        // Получаем с БД хэшированный пароль
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Проверка на наличие пользователя в БД
        if (count($pwdHashed) == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        // Проверка на совпадение пароля
        // если не совпадают отправляем на индекс с ошибкой
        if ($checkPwd == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();

            // если совпадают, авторизуем пользователя
        } elseif ($checkPwd == true) {
            $query = 'SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;';
            $stmt = $this->connect()->prepare($query);

            // Проверка на false c БД
            if (!$stmt->execute([$uid, $uid, $pwdHashed[0]['users_pwd']])) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed"); // Отправляем на индекс с GET запросом о ошибке
                exit();
            }

            // Проверка на отстутствие совпадений имени пользователя или email
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($user) == 0) {
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit();
            }

            // Создаем сеанс
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
        }
        $stmt = null;
    }
}