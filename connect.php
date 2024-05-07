<?php
    // Konfigurasi koneksi ke MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_web";

    // Membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi Berhasil: ". mysqli_connect_error());
    }
?>