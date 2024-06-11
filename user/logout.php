<?php
session_start();

// Menghapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: /levina cintania_13/index.php");
exit;
?>
