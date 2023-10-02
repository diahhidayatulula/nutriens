<?php
include "koneksi.php";

$username = $_POST['username'];
$pw = $_POST['pw'];

$query = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$pw'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['umur'] = $data['umur'];
    $_SESSION['gender'] = $data['gender'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['tb'] = $data['tb'];
    $_SESSION['bb'] = $data['bb'];
    $_SESSION['status'] = "login";
    if($data['role'] == '1'){
        header("location:../user/dashboard.php");
    }elseif($data['role'] == '2'){
        header("location:../admin/dashboard.php");
    }elseif($data['role'] == '3'){
        header("location:../puskesmas/dashboard.php");
    }
}else{
    echo "<script>alert('Gagal Login');window.location.href='../index.php'</script>";
}
