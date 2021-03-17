<?php
/*
Muchamad Taufik Mulyadi
203040142
JAM PRAKTIKUM 13:00
*/
?>

<?php 
$books = [
    [
        "Name" => "Kentzcore",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "1.png"
    ],
    [
        "Name" => "Fasthilic",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "2.png"
    ],
    [
        "Name" => "Conqueror",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "3.png"
    ],
    [
        "Name" => "WHO?",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "4.png"
    ],
    [
        "Name" => "Conqueror",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "5.png"
    ],
    [
        "Name" => "Conqueror",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "6.png"
    ],
    [
        "Name" => "White",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "7.png"
    ],
    [
        "Name" => "WHO?",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "8.png"
    ],
    [
        "Name" => "DXNR",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "9.png"
    ],
    [
        "Name" => "DXNR",
        "Description" => "Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch",
        "Size" => "Allsize",
        "Price" => "RP. 350.000",
        "Category" => "Hoddie",
        "Picture" => "10.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
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
        <td><img src="gambar/<?= $book["Picture"]; ?>"></td>
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