<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $berat = $_POST['berat'];
    $sql = "UPDATE list SET kode = '$kode', nama = '$nama', deskripsi = '$deskripsi', stok = '$stok', 
    harga = '$harga', berat = '$berat' WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location: index.php");
    }
}
