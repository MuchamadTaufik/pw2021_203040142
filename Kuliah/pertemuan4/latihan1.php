<?php
/*
Muchamad Taufik Mulyadi
203040142
https://github.com/MuchamadTaufik/pw2021_203040142
Pertemuan 4( 30 Februari 2021 )
Materi Minggu ini mempelajari mengenai Function

    date
    untuk menampilkan tanggal dengan format tertentu
    echo date ("L, d-M-Y");

    time
    UNIX Timestamp / EPOCH time
    detik yang sudah berlalu sejak 1 januari 1970
    echo time();
    echo date ("l", time() +60*60*24*100);

    mktime
    membuat sendiri detik
    mktime (0,0,0,0,0,0)
    jam, menit, detik, bulan, tanggal, tahun
    echo date( "l", mktime(0,0,0,5,23,2002));
    strtotime
*/
echo date("l", strtotime("23 May 2002"));
?>