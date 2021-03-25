<?php
/*
Muchamad Taufik Mulyadi
203040142
Jumat,13.00
*/
?>

<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM store");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
    <thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Size</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
        <th scope="row"><?= $i ?></th>
        <td><img src="assets/gambar/<?= $book["Picture"]; ?>"></td>
        <td><?= $book["Name"] ?></td>
        <td><?= $book["Description"] ?></td>
        <td><?= $book["Size"] ?></td>
        <td><?= $book["Price"] ?></td>
        <td><?= $book["Category"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>