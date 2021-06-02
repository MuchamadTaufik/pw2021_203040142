<?php
/*
Muchamad Taufik Mulyadi
203040142
https://github.com/MuchamadTaufik
Pertemuan 13( 25 Mei 2021 )
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
