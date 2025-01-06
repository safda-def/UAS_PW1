<?php
$servername = "localhost";
$database = "db_library";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}