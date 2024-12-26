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
            <h3>ILNUR SIRAZHEV</h3>
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
            <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
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

<section class="index-intro">
    <div class="index-intro-bg">
        <div class="wrapper">
            <div class="index-intro-c1">
                <div class="video"></div>
                <p>There's some a video description here</p>
            </div>
            <div class="index-intro-c2">
                <h2>We make<br>professional<br>gear</h2>
                <a href="#">FIND OUR GEAR HERE</a>
            </div>
        </div>
    </div>
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</section>

</body>
</html>
