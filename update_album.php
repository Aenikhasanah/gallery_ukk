<?php 
// koneksi database
include 'koneksi.php';
session_start();
 
// menangkap data yang di kirim dari form
$AlbumID = $_POST['AlbumID'];
$NamaAlbum = $_POST['NamaAlbum'];
$Deskripsi = $_POST['Deskripsi'];

 
// menginput data ke database
$sql=mysqli_query($koneksi,"UPDATE album SET NamaAlbum='$NamaAlbum',Deskripsi='$Deskripsi' WHERE AlbumID='$AlbumID'");
 
// mengalihkan halaman kembali ke album.php
header("location:album.php");
 
?>