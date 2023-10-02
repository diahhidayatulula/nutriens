<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$pw = $_POST['pw'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];
$typeumur = $_POST['typeumur'];
$tb = $_POST['tb'];
$bb = $_POST['bb'];

if($typeumur == "bulan"){
    $umur = $umur/12;
}

$query = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$pw','$nama','$gender','1','$umur','$tb','$bb')");
if($query){
    echo "<script>alert('Berhasil Daftar');window.location.href='../index.php'</script>";
}else{
    echo "<script>alert('Gagal Daftar');window.location.href='../index.php'</script>";
}
?>