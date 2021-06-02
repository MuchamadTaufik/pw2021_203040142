<?php
/* 
    Muchamad Taufik Mulyadi
    203040142
    https://github.com/MuchamadTaufik/pw2021_203040142
    Pertemuan 5( 1 Maret 2021 )
    Materi Minggu ini mempelajari mengenai Array
*/
?>
<?php
$mahasiswa = [
    ["Muchamad Taufik Mulyadi", "203040142", "TIF", "Muhamadtaufikm10@gmail.com"],
    ["Novya Aryanti", "203040000", "TIF", "novyaryn@gmail.com"],
    ["Andinirahayu", "2030401111", "TM", "andini@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>