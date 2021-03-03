<?php
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date ("L, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date ("l", time() +60*60*24*100);

echo date( "l", mktime(0,0,0,5,23,2002));
?>