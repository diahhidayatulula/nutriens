<?php

include "../server/koneksi.php";

$judul = $_POST['judul'];
$desc = $_POST['desc'];
$gambar = $_POST['gambar'];
$link = $_POST['link'];

$simpan = mysqli_query($koneksi,"INSERT INTO edukasi VALUES('','$judul','$desc','$gambar','$link')");

if($simpan){
    echo "<script>alert('Berhasil Tambah Edukasi');window.location.href='../admin/berita.php'</script>";
}else{
    echo "<script>alert('Gagal Tambah Edukasi');window.location.href='../admin/berita.php'</script>";
}
