<?php


include("inc/koneksi.php");

function cekId($input)
{
    if (ctype_digit($input)) {
        return true;
    } else {
        return false;
    }
}



function url_fix()
{
    $url_fix = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
    return $url_fix;
}

function ambil_gambar($id_tulisan)
{
    global $koneksi;
    $sql1 = "select * from page where id ='$id_tulisan'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['isi'];

    preg_match('/<*img[^>]*src*=*["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../image/", url_fix() . "/image/", $gambar);

    return $gambar;
}

function ambil_passion($id_passion)
{
    global $koneksi; //buat ngebaca database di sql
    $sql1 =  "select * from page where id = '$id_passion'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['passion'];
    return  $text;
}

function ambil_nama($id_nama)
{
    global $koneksi;
    $sql1 =  "select * from page where id = '$id_nama'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['nama'];
    return  $text;
}

function ambil_isi($id_isi)
{
    global $koneksi;
    $sql1 =  "select * from page where id = '$id_isi'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = strip_tags($r1['isi']);
    return  $text;
}


function portfolio_foto($id)
{
    global $koneksi;
    $sql1 = "select * from portfolio where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $foto = $r1['foto'];

    if ($foto) {
        return $foto;
    } else {
        return 'default_portfolio-picture.png';
    }
}

function education_foto($id)
{
    global $koneksi;
    $sql1 = "select * from education where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $foto = $r1['foto'];

    if ($foto) {
        return $foto;
    } else {
        return 'default_education-picture.png';
    }
}

function ambil_isi_saja($id, $kolom)
{
    global $koneksi;
    $sql1 = "select $kolom from info where id='$id' ";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    return $r1[$kolom];
}


function homeJob($id_job)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM intro WHERE id='$id_job'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['job'];
    return $text;
}

function homeNama($id_name)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM intro WHERE id='$id_name'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['name'];
    return $text;
}

function aboutisi($id_isi)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_isi'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['isi'];
    return $text;
}



function aboutNama($id_Nama)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_Nama'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['nama'];
    return $text;
}

function aboutDesNama($id_DesNama)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_DesNama'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['des_nama'];
    return $text;
}

function aboutAlamat($id_Alamat)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_Alamat'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['alamat'];
    return $text;
}

function aboutDesAlamat($id_DesAlamat)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_DesAlamat'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['des_alamat'];
    return $text;
}

function aboutEmail($id_Email)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_Email'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['email'];
    return $text;
}

function aboutDesEmail($id_DesEmail)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_DesEmail'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['des_email'];
    return $text;
}

function aboutPhone($id_phone)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_phone'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['phone'];
    return $text;
}

function aboutDesPhone($id_DesPhone)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id='$id_DesPhone'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['des_phone'];
    return $text;
}

function projectTitle($id_title)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM projects WHERE id='$id_title'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['title'];
    return $text;
}

function projectIsi($id_Isi)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM projects WHERE id='$id_Isi'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['isi'];
    return $text;
}

function titleServices($id_titleServices)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM services WHERE id='$id_titleServices'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['title'];
    return $text;
}

function textServices($id_textServices)
{
    global $koneksi;
    $data = mysqli_query($koneksi, "SELECT * FROM services WHERE id='$id_textServices'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['text'];
    return $text;
}
