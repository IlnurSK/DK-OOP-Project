<?php


class LoginContr extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    // Функция авторизации пользователя
    public function loginUser()
    {
        // Создаем обработчик ошибок
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("Location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    // Проверка на пустой ввод полей
    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
