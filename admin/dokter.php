<?php

include "../server/koneksi.php";
session_start();

$nama = $_POST['nama'];
$desc = $_POST['desc'];
$no = $_POST['no'];

$simpan = mysqli_query($koneksi,"INSERT INTO dokter VALUES('','$nama','$desc','$no')");

if($simpan){
    echo "<script>alert('Berhasil Tambah Dokter');window.location.href='../admin/dashboard.php'</script>";
}else{
    echo "<script>alert('Gagal Tambah Dokter');window.location.href='../admin/dashboard.php'</script>";
}