<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ngambil data
    $namaBuku = $_POST["buku"];
    $namaPengarang = $_POST["pengarang"];
    $detailBuku = $_POST["detailbuku"];

    // Query data ke database
    $sql = "INSERT INTO your_table_name (nama_buku, nama_pengarang, detail_buku) VALUES ('$namaBuku', '$namaPengarang', '$detailBuku')";

    // Eksekusi Query
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>