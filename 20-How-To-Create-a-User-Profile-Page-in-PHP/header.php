<?php

// запуск сессии
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <div>
            <h3>ILNUR PROFILING</h3>
            <ul class="menu-main">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">CURRENT SALES</a></li>
                <li><a href="#">MEMBER+</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
            if (isset($_SESSION["userid"])) {
                ?>
                <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                <?php
            }
            else
            {
                ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>