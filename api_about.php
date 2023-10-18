<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');



//hubungkan ke database
include_once("inc/koneksi.php");
//hubungkan ke fungsi.php
include_once("inc/fungsi.php");
//inisialisasikan array utk menyimpan data berita
$data = array();

if (isset($_GET['id']) && cekId($_GET['id'])) {
    $id = $_GET['id'];
    //query utk mengambil data berita berdasarkan ID
    $sql = "select * from aboout where id=$id";

    //eksekusi query
    $result = mysqli_query($koneksi, $sql);

    //cek apakah data ditemukan 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $data = $row;
    } else {
        //jika data tidak ditemukan, kirimkan respon json dengan pesan error
        $data['error'] = 'Data tidak ditemukan';
    }
} else {
    $data['error'] = 'Invalid ID'; //jika ID invalid atau id tidak diberikan
}

//tampilkan data dalam format JSON
echo json_encode($data);

//tutup koneksi database
mysqli_close($koneksi);
