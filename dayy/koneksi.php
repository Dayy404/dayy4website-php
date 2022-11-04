<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "dayy4website";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Koneksi Gagal Bang");
}