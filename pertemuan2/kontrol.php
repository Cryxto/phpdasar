<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>
    <style>
        .warna-baris {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php //Style ini namanya templating
        for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                    <?php if ($i % 2 != 0 && $j % 2 != 0) : ?>
                        <td class='warna-baris'><?php echo "$i,$j"; ?></td>
                    <?php elseif ($i % 2 == 0 && $j % 2 == 0) : ?>
                        <td class='warna-baris'><?php echo "$i,$j"; ?></td>
                    <?php else :; ?>
                        <td><?php echo "$i,$j"; ?></td>
                    <?php endif ?>
                <?php endfor ?>
            </tr>
        <?php endfor ?>

    </table>
</body>

</html>