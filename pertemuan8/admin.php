<?php
require "function.php";
// include("function.php");
$thedata = query("SELECT * FROM mahasiswa;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Practice</title>
    <style>
        p {
            color: brown;
            font-style: italic;
        }

        .action {
            border: none;
        }

        img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>
    <h1>ADMIN PAGE</h1>
    <p><?php db_connection_status(); ?></p>
    <p><?php //var_dump($thedata); ?></p>
    <a href="insert.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Foto</th>
                <th>aksi</th>
            </tr>
        </thead>
        <?php $i=1; ?>
        <?php foreach($thedata as $fetch): ?>
        <tbody>
            <td><?php echo $i ; 
                ?></td>
            <td><?php echo $fetch["nim"] ; 
                ?></td>
            <td><?php echo $fetch["nama"] ; 
                ?></td>
            <td><?php echo $fetch["jurusan"] ; 
                ?></td>
            <td><img src="../img/<?= $fetch["gambar"]; ?>" alt="img source not found"></td>
            <td>
                <a href="update.php?id=<?= $fetch["id"]; ?>">edit</a>
                <a href="delete.php?id=<?= $fetch["id"]; ?>" onclick="return confirm('Yakin hapus?') ">hapus</a>
            </td>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>