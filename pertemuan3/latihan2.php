<?php
// pengkondisian/percabangan
// if else
// if else if else
// ternary
// switch

$x = 2;
if ( $x < 20) {
    echo "benar";
} else if ( $x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

//contoh
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contoh pengkondisian</title>
    <style>
    .warna-baris {
        background-color: red;
    }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 5; $i++) :?>
        <?php if( $i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++) :?>
                <td><?= "$i, $j"; ?></td>
        <?php endfor; ?>
            </tr>
    <?php endfor; ?>
    </table>
</body>
</html>