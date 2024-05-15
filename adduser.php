<?php
// Aktifkan pelaporan kesalahan mysqli dan setel agar dilempar sebagai exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "connect.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

try {
    // Gunakan pernyataan yang dipersiapkan untuk mencegah SQL injection
    $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // Eksekusi pernyataan
    $stmt->execute();

    // Pengalihan ke halaman login jika berhasil
    header("Location: Login.html");
} catch (mysqli_sql_exception $e) {
    // Jika terjadi duplikasi entri (kode kesalahan 1062)
    if ($e->getCode() == 1062) {
        header("Location: Register.html?error=1");
    } else {
        // Untuk kesalahan lain, mungkin ingin logging kesalahan atau pengalihan ke halaman lain
        header("Location: Register.html?error=2");
    }
}

// Tutup pernyataan dan koneksi
$stmt->close();
$conn->close();
?>
