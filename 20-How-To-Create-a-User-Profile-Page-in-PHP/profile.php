<?php

include_once "header.php";

// Подключаем файлы классов страницы профиля
include "classes/dbh.classes.php"; // доступ в БД
include "classes/profileinfo.classes.php";
include "classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();

?>

<section class="profile">
    <div class="profile-bg">
        <div class="wrapper">
            <div class="profile-info">
                <div class="profile-info-img">
                    <p>
                        <?php
                        echo $_SESSION["useruid"];
                        ?>
                    </p>
                    <div class="break"></div>
                    <a href="profilesettings.php" class="follow-btn">PROFILE SETTINGS</a>
                </div>
                <div class="profile-info-about">
                    <h3>ABOUT</h3>
                    <p>
                        <?php
                        $profileInfo->fetchAbout($_SESSION["userid"]);
                        ?>
                    </p>
                    <h3>FOLLOWERS</h3>
                    <h3>FOLLOWING</h3>
                </div>
            </div>
            <div class="profile-content">
                <div class="profile-intro">
                    <h3>
                        <?php
                        $profileInfo->fetchTitle($_SESSION["userid"]);
                        ?>
                    </h3>
                    <p>
                        <?php
                        $profileInfo->fetchText($_SESSION["userid"]);
                        ?>
                    </p>
                </div>
                <div class="profile-posts">
                    <h3>POSTS</h3>
                    <div class="profile-post">
                        <h2>IT IS A BUSY DAY IN TOWN</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at cum in ipsum itaque porro praesentium quam veniam, voluptatem? Amet deleniti dicta illo porro quisquam soluta tempora temporibus? Adipisci, omnis!</p>
                        <p>12:46 - 09/11/2021</p>
                    </div>
                    <div class="profile-post">
                        <h2>RE-USING ELECTRONICS IS A GOOD IDEA</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorem explicabo id illum quo ullam! Atque corporis, deserunt dicta, doloremque eius eos facere hic ipsa ipsum itaque nesciunt odit voluptate!</p>
                        <p>16:11 - 11/11/2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
