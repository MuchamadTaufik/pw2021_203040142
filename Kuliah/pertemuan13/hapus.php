<?php
/*
Muchamad Taufik Mulyadi
203040142
https://github.com/MuchamadTaufik
Pertemuan 13( 25 Mei 2021 )
*/
?>
<?php
require 'functions.php';

// mengambil data dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php';
		</script>
	";
} else {
  echo "data gagal ditambahkan!";
}
