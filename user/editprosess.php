<?php

include "../server/koneksi.php";
session_start();

$tb = $_POST['tb'];
$bb = $_POST['bb'];
$umur = $_POST['umur'];
$typeumur = $_POST['typeumur'];

if($typeumur == "bulan"){
    $umur = $umur/12;
}

$update = mysqli_query($koneksi,"UPDATE user SET tb='$tb',bb='$bb',umur='$umur' WHERE id='$_SESSION[id]'");

if($update){
    $_SESSION['tb'] = $tb;
    $_SESSION['bb'] = $bb;
    $_SESSION['umur'] = $umur;
    header("location:../user/dashboard.php");
}else{
    echo "<script>alert('Gagal Update');window.location.href='../user/dashboard.php'</script>";
}