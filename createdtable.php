<?php
include "koneksi.php";

// SQL untuk membuat tabel
$sql = "CREATE TABLE elektronik (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(40) DEFAULT NULL,
    harga DOUBLE DEFAULT NULL,
    jumlah INT(1) DEFAULT NULL,
    keterangan VARCHAR(100) DEFAULT NULL,
    foto VARCHAR(200) DEFAULT NULL,
    PRIMARY KEY (id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'barang' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
