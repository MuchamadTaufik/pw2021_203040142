<?php
//Muchamad Taufik Mulyadi
// 203040142
// Praktikum Pemrograman Web
session_start();
session_destroy();
header("Location: login.php");
die;

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: login.php");
die;
?>