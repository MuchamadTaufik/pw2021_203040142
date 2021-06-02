<?php
/*
Muchamad Taufik Mulyadi
203040142
Jumat,13.00
*/
?>
<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040142");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $size = htmlspecialchars($data['size']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO store
				VALUES
			('', '$picture', '$name', '$description', '$size', '$price', '$category')
			";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM store WHERE id = $id");
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data["id"]);
    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["Name"]);
    $description = htmlspecialchars($data["Description"]);
    $size = htmlspecialchars($data["Size"]);
    $price = htmlspecialchars($data["Price"]);
    $category = htmlspecialchars($data["Category"]);

    $query = "UPDATE store
                SET
                picture = '$picture',
                Name = '$name',
                Description = '$description',
                Size = '$size',
                Price = '$price',
                Category = '$category',
                WHERE id = '$id'
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>