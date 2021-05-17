<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM store");
?>