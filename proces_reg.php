<<?php
$conn = new mysqli("localhost", "root", "", "gallery");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$user = $_POST['user'];
$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$email = $_POST['email'];
$nama = $_POST['nama'];

// SQL untuk memasukkan data
$sql = "INSERT INTO user (user, pass, email, nama) VALUES ('$user', '$pass', '$email', '$nama')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman login
    header("Location: proces_log.php");
    exit(); // Pastikan skrip berhenti setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

