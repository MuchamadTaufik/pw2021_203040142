
<?php 
/*
Praktikum Pemrograman Web
Muchamad Taufik Mulyadi
203040142
Jum'at 13.00
*/
for($i = 1; $i <= 3; $i++) :?>
    <tr>
        <?php for($j = 1; $j <= 3; $j++) :?>
        <td><?php echo "Ini perulangan ke ($i, $j) <br>"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
