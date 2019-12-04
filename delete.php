<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE from list WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("location: index.php");
}
