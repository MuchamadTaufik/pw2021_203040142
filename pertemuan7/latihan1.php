<?php
/* 
    Muchamad Taufik Mulyadi
    203040142
    https://github.com/MuchamadTaufik
    Pertemuan 7( 17 Maret 2021 )
    Materi Minggu ini mempelajari mengenai GET & POST
*/
?>
<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Muchamad Taufik Mukyadi", 
        "nrp" => "203040142",
        "email" => "muhamadtaufikm10@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "taufik.png"
    ],
    [
        "nama" => "Novya Aryanti", 
        "nrp" => "203040000",
        "email" => "novyary@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "novya.png"
    ]
];


// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>