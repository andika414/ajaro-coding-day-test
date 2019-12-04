<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="upload.php" method="post">
        masukkan kode
        <input type="text" name="kode"><br />
        masukkan nama
        <input type="text" name="nama"><br />
        deskripsi
        <textarea name="deskripsi"></textarea><br />
        stok
        <input type="text" name="stok"><br />
        harga
        <input type="text" name="harga"><br />
        berat
        <input type="text" name="berat"> gram <br />
        <input type="submit" name="submit" value="submit"><br />
    </form>
</body>

</html>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];
    $sql = "INSERT INTO list VALUES (null,'$kode', '$nama', '$deskripsi', '$stok', '$harga', '$berat')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "koneksi berhasil <a href='index.php'>lihat data</a>";
    }
}
?>