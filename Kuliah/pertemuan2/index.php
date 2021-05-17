<?php
/*
Muchamad Taufik Mulyadi
203040142
https://github.com/MuchamadTaufik/pw2021_203040142
pertemuan 2 - 8 Februari 2021
Mempelajari mengenai sintaks PHP 
*/
?>

<?php
// Standar Output
// echo, print
//print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe data
// Variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
    $nama = "shandika";
    echo "Halo, nama saya $nama";

//Operator
//aritmatika
// + - * / %
    $x = 10;
    $y = 20;
    echo $x + $y;

// penggabung string / concetenation/ concat
// .
    $nama_depan = "Shandika";
    $nama_belakang = "Galih";
    echo $nama_depan . " " . $nama_belakang;

//Assignment
// =, +=, -=, *=, /=, %=, .=
    $x = 1;
    $x -=5;
    echo $x;
    $nama = "Shandika";
    $nama .= " ";
    $nama .= "Galih";
    echo $nama;

// Perbandingan
// <, >, <=, >=, ==
    var_dump(1 == "1");

// Indetitas
// ===, !==
    var_dump(1 === "1");

// Logika
// &&, ||, !
    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);

?>