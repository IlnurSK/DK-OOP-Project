<?php

// Разлогинивание пользователя

session_start();
session_unset();
session_destroy();

// Going back to front page
header("Location: ../index.php?error=none");
