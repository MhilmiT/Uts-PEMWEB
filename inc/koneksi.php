<?php

$host = "localhost";
$user = "id21418269_root";
$pass = "Mhilmit1298_";
$db = "id21418269_portfoliouts";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("gagal terhubung");
}
