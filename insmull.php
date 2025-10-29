<?php
include "koneksi.php";

$sql  = "INSERT INTO barang (id, nama, harga, jumlah, keterangan, foto) 
          VALUES (6, 'aglonemaRoDudAnjamani', 65000, 10, NULL, 'aglonemaRoDudAnjamani.jpg');";
$sql .= "INSERT INTO barang (id, nama, harga, jumlah, keterangan, ) 
          VALUES (8, 'aglonemaVenus', 65000, 10, '-', 'aglonemaVenus.');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>