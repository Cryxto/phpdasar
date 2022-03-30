<?php
    if(
        !isset($_GET["gambar"])||
        !isset($_GET["nama"])||
        !isset($_GET["nim"])||
        !isset($_GET["jurusan"])||
        !isset($_GET["email"])
    ){
        header("Location: getpost.php");
        exit;
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
        .img{
            list-style: none;
        }
    </style>
</head>
<body>
    <ul>
        <li class="img"><img src="img/<?= $_GET["gambar"]; ?>" ></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIM : <?= $_GET["nim"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
        <li>E-mail : <?= $_GET["email"]; ?></li>
    </ul>    
</body>
</html>