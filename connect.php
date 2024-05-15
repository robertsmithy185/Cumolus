<?php
    // Konfigurasi koneksi ke MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cumolus";

    // Membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: ". mysqli_connect_error());
    }
?>
