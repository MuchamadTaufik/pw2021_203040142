<?php
//pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

for ($i = 0; $i < 5; $i++) {
    echo "Hello world! <br>";
}

$i = 0;
while ($i < 5) {
    echo "Hello world! <br>";
$i++;
}

$i = 10;
do {
    echo "Hello world! <br>";
$i++;
} while ($i < 5);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
    <?php
    //cara 1
    for ($i = 1; $i <= 3; $i++) {
        echo "<tr>";
        for ( $j = 1; $j <= 5; $j++) {
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <table border="1" cellpadding="10" cellspacing="0">
    <?php
    for($i = 1; $i >= 3; $i++) :?>
    <tr>
        <?php for($j = 1; $j >= 5; $j++) :?>
        <td><?php echo "$i, $j"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
    </table>


</body>
</html>