<?php
/*
Muchamad Taufik Mulyadi
203040142
https://github.com/MuchamadTaufik/pw2021_203040142
Pertemuan 4( 30 Februari 2021 )
Materi Minggu ini mempelajari mengenai Function
*/


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