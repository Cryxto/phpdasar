<?php
    $mahasiswa = [
        [
            "nama"=>"Syahil Udin",
            "nim"=>"123123",
            "jurusan"=>"Teknik Informatika",
            "email"=>"Syaudain@gmail.com",
            "gambar"=>"aaa.png"
        ],
        [
            "nama"=>"Stefanus Wawan",
            "nim"=>"123223",
            "jurusan"=>"Teknik Informatika",
            "email"=>"Fanuswan@gmail.com",
            "gambar"=>"bbb.jpg"
        ],
        [
            "nama"=>"Wisnu Dharmasatya",
            "nim"=>"123227",
            "jurusan"=>"Teknik Informatika",
            "email"=>"WisnuDharma@gmail.com",
            "gambar"=>"ccc.jpg"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .clear{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li class="clear"><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama    : <?php echo $mhs["nama"] ; ?></li>
        <li>Nim     : <?php echo $mhs["nim"] ; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ; ?></li>
        <li>E-Mail  : <?php echo $mhs["email"] ; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>