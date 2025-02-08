<?php
// Memulai sesi
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['userid'])) {
    // Jika sudah login, tampilkan halaman galeri
    $isLoggedIn = true;
} else {
    // Jika belum login, tampilkan modal
    $isLoggedIn = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Album - Kamila Aurellia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Modal Login/Register -->
    <?php if (!$isLoggedIn): ?>
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>Login</h2>
            <form method="POST" action="proces_log.php">
                <label for="user">Username</label>
                <input type="text" id="user" name="user" required>
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" required>
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <button id="switch-register">Register</button></p>
        </div>
    </div>
    <?php endif; ?>
    

    <!-- Halaman Galeri -->
    <?php if ($isLoggedIn): ?>
    <header>
        <h1>Galeri Album</h1>
        <nav>
            <a href="home.html">Home</a>
            <a href="gallery.html">Gallery</a>
            <a href="contact.html">Contact</a>
            <a href="logout.html">Logout</a>
        </nav>
        
    </header>
    <main>
        <section class="gallery">
            <div class="gallery-item">
                <a href="details/jh.php">
                    <img src="assets/images/jh.jpg" alt="Album JH">
                    <div class="gallery-info">
                        <h3>Album JH</h3>
                        <p>Kumpulan produk JH berkualitas tinggi.</p>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="details/sf.php">
                    <img src="assets/images/sf.jpg" alt="Album SF">
                    <div class="gallery-info">
                        <h3>Album SF</h3>
                        <p>Desain inovatif dari produk SF.</p>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="details/sc.html">
                    <img src="assets/images/sc.jpg" alt="Album SC">
                    <div class="gallery-info">
                        <h3>Album SC</h3>
                        <p>Koleksi SC untuk kebutuhan harian Anda.</p>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="details/jh1.html">
                    <img src="assets/images/jh1.jpg" alt="Album JH1">
                    <div class="gallery-info">
                        <h3>Album JH1</h3>
                        <p>Produk terbaru dalam koleksi JH.</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Galeri Album | Disusun oleh Kamila Aurellia - RPL</p>
    </footer>
    <?php endif; ?>

    <script src="js/script.js"></script>
</body>
</html>
