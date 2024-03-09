<?php 
// koneksi database
include 'koneksi.php';
session_start();
 
// menangkap data yang di kirim dari form
$AlbumID = $_GET['AlbumID'];
 
// menginput data ke database
$sql=mysqli_query($koneksi,"DELETE FROM album WHERE AlbumID='$AlbumID'");
 
// mengalihkan halaman kembali ke album.php
header("location:album.php");
 
?>