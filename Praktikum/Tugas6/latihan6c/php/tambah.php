<?php
    /*
    Muchamad Taufik Mulyadi
    203040142
    Jumat,13.00
    */
    ?>
<?php
    session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tambah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
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
    <title>Form Tambah Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>

<h3>Form Tambah Data</h3>
<form action="" method="post">
<ul>
    <li>
        <label for="name">Picture :</label><br>
        <input type="file" name="picture" id="picture" required><br><br>
    </li>
    <li>
        <label for="name">Name :</label><br>
        <input type="name" name="name" id="name" required><br><br>
    </li>
    <li>
        <label for="name">Description :</label><br>
        <input type="description" name="description" id="description" required><br><br>
    </li>
    <li>
        <label for="name">Size :</label><br>
        <input type="size" name="size" id="size" required><br><br>
    </li>
    <li>
        <label for="name">Price :</label><br>
        <input type="price" name="price" id="price" required><br><br>
    </li>
    <li>
        <label for="name">Category :</label><br>
        <input type="category" name="category" id="category" required><br><br>
    </li>
    <br>
    <button type="submit" name="tambah">Tambah Data!</button>
    <button type="submit">
        <a href="admin.php" style="text-decoration : none; color: black;">Kembali</a>
    </button>
</ul>
</form>
</body>

</html>