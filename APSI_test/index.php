<?php
require "function.php";
$thedata = query("SELECT * FROM mahasiswa;");
// var_dump($thedata);
if (isset($_POST["submit"])) {
    $_POST["nilai"]=(int)$_POST["nilai"];
    var_dump($_POST["nilai"]);
    if ($_POST["nilai"]>=80 && $_POST["nilai"]<=100){
        $_POST["grade"]= "A";
        $_POST["status"]= "LULUS";
    }
    elseif ($_POST["nilai"]>=60&&$_POST["nilai"]<80){
        $_POST["grade"]= "B";
        $_POST["status"]= "LULUS";
    }
    elseif ($_POST["nilai"]>=0&&$_POST["nilai"]<60){
        $_POST["grade"]= "C";
        $_POST["status"]= "GAGAL";
    }else{
        echo "invalid" ;
    }
    insertdata($_POST);
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
        li {
            /* margin-bottom: 1em; */
            padding-bottom: 1em;
            width: 400px;
            list-style: none;
            display: flex;
            flex-direction: column;
        }

        label {
            padding-bottom: 0.5em;
        }

        h1 {
            padding-left: 1.2em;
        }
    </style>
</head>

<body>
    <h1>Cek Grade</h1>
    <p><?php db_connection_status(); ?></p>
    <p><?php //var_dump($thedata); ?></p>
    <form action="" method="post">
        <label for="nama"></label>
        <input type="text" name="nama" id="nama" placeholder="enter nama">
        <label for="nim"></label>
        <input type="text" name="nim" id="nim" placeholder="enter nim">
        <label for="alamat"></label>
        <input type="text" name="alamat" id="alamat" placeholder="enter alamat">
        <label for="nilai"></label>
        <input type="number" name="nilai" id="nilai" placeholder="enter nilai">
        <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
        </thead>
        <?php foreach($thedata as $data): ?>
        <tbody>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["nim"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["nilai"]; ?></td>
            <td><?= $data["grade"]; ?></td>
            <td><?= $data["status"]; ?></td>
        </tbody>
        <?php endforeach ?>
    </table>
</body>

</html>