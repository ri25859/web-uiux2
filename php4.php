<?php
$server = "localhost";
$user = "root";
$pass ="";
$namadb ="php";

$db = mysqli_connect($server, $user, $pass, $namadb);
if (!$db) {
    die("Gagal Terkoneksi" . mysqli_connect_error());
} else {
    echo "connected";
}

?>