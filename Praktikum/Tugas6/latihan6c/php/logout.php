<?php
    /*
    Muchamad Taufik Mulyadi
    203040142
    Jumat,13.00
    */
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>