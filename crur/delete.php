<?php
include 'connect.php';
if (!isset($_SESSION['email'])) { 
    // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login 
    echo "<script>alert('Maaf, Anda belum login!');</script>"; 
    echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda 
    exit; 
}
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from buah where id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
    header('loction:read.php');
    }else  {
        die($conn->connect_error);
    }
}
?>