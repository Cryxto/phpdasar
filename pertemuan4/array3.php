<?php
$array = [
    [1, 3, 5],
    [2, 4, 6],
    [7, 9, 11]
];
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
            transition: 0.4s;
        }

        .box:hover {
            transform: rotate(180deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php foreach ($array as $row) : ?>
        <?php foreach ($row as $col) : ?>
            <div class="box"><?php echo $col ; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>