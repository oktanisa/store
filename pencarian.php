<?php include 'koneksi.php'; ?>
<?php
$keyword = $_GET["keyword"];

$semuadata=array();
$koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pencarian</title>
    <link rel="stylesheet" href="admin/assets/css/boostrap.css">
</head>
<body>

    <div class ="container">
        <h3>Hasil Pencarian</h3>
    </div>
</body>
</html>