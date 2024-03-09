<?php 
// koneksi database
include 'koneksi.php';
session_start();
 
// menangkap data yang di kirim dari form
$FotoID = $_GET['FotoID'];
 
// menginput data ke database
$sql=mysqli_query($koneksi,"DELETE FROM foto WHERE FotoID='$FotoID'");
 
// mengalihkan halaman kembali ke album.php
header("location:foto.php");
 
?>