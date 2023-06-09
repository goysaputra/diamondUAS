<?php
$host = "sql106.infinityfree.com";
$username = "if0_34389746";
$password = "IFhrfQA8dG";
$database = "if0_34389746_yogi";

$conect = mysqli_connect($host, $username, $password, $database);

if (!$conect) {
    die("Koneksi database gagal: " .mysqli_connect_error());
}
?>