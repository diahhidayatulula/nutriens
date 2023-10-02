<?php

include "../server/koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($koneksi,"DELETE FROM edukasi WHERE id='$id'");
if($hapus){
    echo "<script>alert('Berhasil Hapus Edukasi');window.location.href='../admin/berita.php'</script>";
}else{
    echo "<script>alert('Gagal Hapus Edukasi');window.location.href='../admin/berita.php'</script>";
}

?>