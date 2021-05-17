<?php
/* 
    Muchamad Taufik Mulyadi
    203040142
    https://github.com/MuchamadTaufik/pw2021_203040142
    Pertemuan 6( 11 Maret 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Muchamad Taufik Mulyadi", "203040142", "TIF", "Muchamad Taufik Mulyadi"],
//     ["Novyaaryn", "203040000", "TIF", "Novyaryn@gmail.com"],
//     ["Staphalgar", "203044444", "TM", "Staph@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Novya Aryanti", 
        "nrp" => "203040111",
        "email" => "novyaryn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "novya.png"
    ],
    [
        "nama" => "Muhamad Taufik Mulyadi", 
        "nrp" => "203040142",
        "email" => "muhamadtaufikm10@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "taufik.png"
    ]
];

?> 
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="gambar/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>