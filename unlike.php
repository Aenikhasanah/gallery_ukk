<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['UserID'])){
    //Untuk bisa unlike harus login dulu
    header("Location:index.php");
}else{
    $FotoID=$_GET['FotoID'];
    $UserID=$_SESSION['UserID'];
    // ceK apakah user sudah pernah unlike foto ini atau belum
    $sql=mysqli_query($koneksi,"DELETE FROM likefoto WHERE FotoID='$FotoID' AND UserID='$UserID'");
    header("location:zoom.php?ID=$FotoID");
}
?>