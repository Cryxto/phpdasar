<?php
require 'function.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id;")[0];
// echo $mhs;
// var_dump($mhs);
    if (isset($_POST["submit"])) {
       updatedata($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            /* margin-bottom: 1em; */
            padding-bottom: 1em;
            width: 400px;
            list-style: none;
            display: flex;
            flex-direction:column;
        }
        label{
            padding-bottom: 0.5em;
        }
        h1{
            padding-left: 1.2em;
        }

    </style>
</head>
<body>
    <h1>Halaman Tambah Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>" >
            <input type="hidden" name="gambarlama" value="<?= $mhs['gambar']; ?>" >
            <li>
               <label for="nim">NIM</label>
               <input type="text" name="nim" id="nim" placeholder="enter nim" value="<?= $mhs['nim']; ?>" required>
            </li>
            <li>
               <label for="nama">Nama</label>
               <input type="text" name="nama" id="nama" placeholder="enter nama" value="<?= $mhs['nama']; ?>" required>
            </li>
            <li>
               <label for="jurusan">Jurusan</label>
               <input type="text" name="jurusan" id="jurusan" placeholder="enter jurusan" value="<?= $mhs['jurusan']; ?>" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img src="../img/<?= $mhs["gambar"]; ?>" alt="imgage not found" width="100">
                <br>
               <input type="file" name="gambar" id="gambar" placeholder="enter gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
            <li>
                <a href="admin.php">Kembali ke dashboard</a>
            </li>
        </ul>
    </form>
</body>
</html>