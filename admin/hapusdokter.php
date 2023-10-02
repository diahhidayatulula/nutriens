<?php

include "../server/koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($koneksi,"DELETE FROM dokter WHERE id='$id'");
if($hapus){
    echo "<script>alert('Berhasil Hapus Dokter');window.location.href='../admin/dashboard.php'</script>";
}else{
    echo "<script>alert('Gagal Hapus Dokter');window.location.href='../admin/dashboard.php'</script>";
}
?>