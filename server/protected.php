<?php
// Cek apakah ada session jika tidak redrect ke login
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>