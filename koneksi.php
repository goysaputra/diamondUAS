<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "jb.diamond";

$conect = mysqli_connect($host, $username, $password, $database);

if (!$conect) {
    die("Koneksi database gagal: " .mysqli_connect_error());
}
?>