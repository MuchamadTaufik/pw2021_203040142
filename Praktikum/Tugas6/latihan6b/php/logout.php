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
?>