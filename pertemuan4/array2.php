<?php
    $mahasiswa = [
        ["Syahil Udin","123123","Teknik Informatika","Syaudain@gmail.com"],
        ["Stefanus Wawan","123223","Teknik Informatika","Fanuswan@gmail.com"],
        ["Wisnu Dharmasatya","123227","Teknik Informatika","WisnuDharma@gmail.com"]
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
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    : <?php echo $mhs[0] ; ?></li>
        <li>Nim     : <?php echo $mhs[1] ; ?></li>
        <li>Jurusan : <?php echo $mhs[2] ; ?></li>
        <li>E-Mail  : <?php echo $mhs[3] ; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>