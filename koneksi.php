<?php
$host = 'localhost'; // atau alamat server database Anda
$user = 'root'; // username database Anda
$pass = ''; // password database Anda
$db = 'keefe'; // nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
