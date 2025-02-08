<form action="proces_log.php" method="POST">
    <label for="user">Username:</label>
    <input type="text" id="user" name="user" required>
    
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" required>
    
    <button type="submit">Login</button>
</form>

<?php
session_start();

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "gallery");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Validasi input dari form
if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $conn->real_escape_string($_POST['user']);
    $pass = $_POST['pass'];

    // Query untuk mencari user
    $sql = "SELECT * FROM user WHERE user = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($pass, $row['pass'])) {
            // Set session untuk user yang berhasil login
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['user'];

            // Redirect ke halaman utama
            header("Location: index.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "User tidak ditemukan!";
    }
} else {
    echo "Harap isi username dan password!";
}

// Menutup koneksi
$conn->close();
?>
