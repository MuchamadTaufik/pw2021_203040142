<?php
function salam($waktu, $nama) {
    return "selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar fungsi</title>
</head>
<body>
    <h1><?= salam("siang", "taufik"); ?></h1>
</body>
</html>