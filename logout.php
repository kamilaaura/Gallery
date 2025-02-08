<?php
// Memulai sesi
session_start();

// Menghapus semua data sesi
session_unset();
session_destroy();

// Mengarahkan kembali ke halaman login
header("Location: proces_log.php");
exit();
?>
