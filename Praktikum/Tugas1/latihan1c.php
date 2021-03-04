<?php
/*
Praktikum Pemrograman Web
Muchamad Taufik Mulyadi
203040142
Jum'at 13.00
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1c</title>
    <style>
        .lingkaran {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php for( $i = 1; $i <= 3; $i++) : ?>
        <?php for( $j = 1; $j <= $i; $j++) : ?>
            <div class="lingkaran"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>