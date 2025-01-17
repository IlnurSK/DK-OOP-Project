<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, 'UTF-8');
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, 'UTF-8');
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, 'UTF-8');

    // Подключаем файлы классов страницы профиля
    include "../classes/dbh.classes.php"; // доступ в БД
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($id, $uid);

    $profileInfo->updateProfileInfo($about, $introTitle, $introText);

    header("Location: ../profile.php?error=none");
}