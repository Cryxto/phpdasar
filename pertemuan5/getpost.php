<?php
$mahasiswa = [
    [
        "nama" => "Syahil Udin",
        "nim" => "123123",
        "jurusan" => "Teknik Informatika",
        "email" => "Syaudain@gmail.com",
        "gambar" => "aaa.png"
    ],
    [
        "nama" => "Stefanus Wawan",
        "nim" => "123223",
        "jurusan" => "Teknik Informatika",
        "email" => "Fanuswan@gmail.com",
        "gambar" => "bbb.jpg"
    ],
    [
        "nama" => "Wisnu Dharmasatya",
        "nim" => "123227",
        "jurusan" => "Teknik Informatika",
        "email" => "WisnuDharma@gmail.com",
        "gambar" => "ccc.jpg"
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
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <a href="detail-mhs.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><li><?= $mhs["nama"]; ?></li></a>
        <?php endforeach; ?>
    </ul>
</body>

</html>