<?php
include "koneksi.php";

$sql = "INSERT INTO barang (id, nama, harga, jumlah, keterangan, foto) 
        VALUES (1, 'aglonema Sukson', 50000, 20, '-', 'aglonemaSukson.jpg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>