<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php if(isset($_POST["button"])): ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <!-- <form action="post-welcome.php" method="POST">
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="enter your name">
        </div>
        <div>
            bahaaha
        </div> -->
    <form action="" method="POST">
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="enter your name">
        </div>
        <button name="button">Submit</button>
    </form>
</body>
</html>