<?php
/*
Muchamad Taufik Mulyadi
203040142
Jumat,13.00
*/
?>
<?php
require 'functions.php';
$id = $_GET['id'];
$book = query("SELECT * FROM store WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['ubah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>

<h3>Form Ubah Data Store</h3>
<form action="" method="post">
<ul>
<input type="hidden" name="id" id="id" value="<?= $book['id'];?>">
    <li>
        <label for="name">Picture :</label><br>
        <input type="file" name="picture" id="picture" required value="<?= $book['picture'];?>"><br><br>
    </li>
    <li>
        <label for="name">Name :</label><br>
        <input type="text" name="Name" id="Name" required value="<?= $book['Name'];?>"><br><br>
    </li>
    <li>
        <label for="name">Description :</label><br>
        <input type="text" name="Description" id="Description" required value="<?= $book['Description'];?>"><br><br>
    </li>
    <li>
        <label for="name">Size :</label><br>
        <input type="text" name="Size" id="Size" required value="<?= $book['Size'];?>"><br><br>
    </li>
    <li>
        <label for="name">Price :</label><br>
        <input type="text" name="Price" id="Price" required value="<?= $book['Price'];?>"><br><br>
    </li>
    <li>
        <label for="name">Category :</label><br>
        <input type="text" name="Category" id="Category" required value="<?= $book['Category'];?>"><br><br>
    </li>
    <br>
    <button type="submit" name="ubah">Ubah Data!</button>
    <button type="submit">
        <a href="admin.php" style="text-decoration : none; color: black;">Kembali</a>
    </button>
</ul>
</form>
</body>

</html>