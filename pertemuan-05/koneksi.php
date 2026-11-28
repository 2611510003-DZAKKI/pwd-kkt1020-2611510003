<?php
// koneksi.php — konfigurasi koneksi PHP-MySQL (MySQLi) yang dapat digunakan ulang.
// P11: Pemisahan konfigurasi koneksi ke dalam berkas tersendiri.

$host     = "localhost";
$user     = "root";
$password = "";                      // Laragon: root tanpa password.
$database = "db_pwd_2611510003";    // Sesuaikan dengan nama basis data Anda.

$koneksi = mysqli_connect($host, $user, $password, $database);

// Penanganan kegagalan koneksi sesuai indikator P11.
if (!$koneksi) {
  die("Koneksi ke basis data gagal: " .
    htmlspecialchars(mysqli_connect_error(), ENT_QUOTES, "UTF-8"));
}

mysqli_set_charset($koneksi, "utf8mb4");
