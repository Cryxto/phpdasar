<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .aaa {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($array); $i++) : ?>
        <div class="box"><?php echo $array[$i] ?></div>
    <?php endfor ?>
    <div class="aaa"></div>
    <?php foreach ($array as $value) : ?>
        <div class="box"><?php echo $value ?></div>
    <?php endforeach ?>
</body>

</html>