<?php
    echo date("l, d F Y") ;
    echo "<br>" ;
    echo date("l, d F Y",time()+60*60*24*7) ;
    echo "<br>" ;
    echo date("l, d F Y",mktime(0,0,0,11,27,1800)) ;
    echo "<br>" ;
    echo date("l, d F Y",strtotime("25 December 1000")) ;
    echo "<br>" ;
    echo time() ;
    echo "<br>" ;
    function salam($time, $nama){
        return "$nama login on : $time" ;
    }
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
    <h1><?php echo salam(date("l, F d, Y"), "Bagas"); ?></h1>
</body>
</html>