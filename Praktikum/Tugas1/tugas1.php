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
    <title>Tugas1</title>
</head>
<body>
    <table border="2" cellpadding="20" cellspacing="5">
        <?php for( $i = 1; $i <= 6; $i++) : ?>
            <tr>
                <?php for( $j = 1; $j <= 6; $j++) : ?>
                    <?php if (($i + $j) %2 == 1) { ?>
                        <td bgcolor="salmon"></td>
                    <?php } else if (($i + $j) %2 == 0) { ?>
                        <td bgcolor="lightblue"></td>
                    <?php } ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>