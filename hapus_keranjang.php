<?php 
include 'koneksi.php';

$id = $_GET['id_kategori'];

mysqli_query("DELETE FROM kategori WHERE id_kategori='$id'");
 
header("location : keranjang.php");

?>