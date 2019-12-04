<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * from list WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$kode = $row['kode'];
$nama = $row['nama'];
$deskripsi = $row['deskripsi'];
$stok = $row['stok'];
$harga = $row['harga'];
$berat = $row['berat'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        masukkan kode
        <input type="text" name="kode" value="<?php echo $kode; ?>"><br />
        masukkan nama
        <input type="text" name="nama" value="<?php echo $nama; ?>"><br />
        deskripsi
        <textarea name="deskripsi"><?php echo $deskripsi; ?></textarea><br />
        stok
        <input type="text" name="stok" value="<?php echo $stok; ?>"><br />
        harga
        <input type="text" name="harga" value="<?php echo $harga; ?>"><br />
        berat
        <input type="text" name="berat" value="<?php echo $berat; ?>"> gram <br />
        <input type="submit" name="submit" value="submit"><br />
    </form>
</body>

</html>