<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <th>kode</th>
            <th>nama</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $sql = "SELECT * from list";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
        <td>$row[kode]</td>
        <td>$row[nama]</td>
        <td>$row[harga]</td>
        <td> <a href='edit.php?id=$row[id]'>edit</a> | <a href='delete.php?id=$row[id]'>delete</a></td>";
        }
        ?>
    </table>
</body>

</html>