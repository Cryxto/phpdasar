<?php
require'function.php';
    if(isset($_POST["register"])){
        if(registration($_POST)>0){
            echo "user added!" ;
        }
    
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
        li{
            /* margin-bottom: 1em; */
            padding-bottom: 1em;
            width: 300px;
            list-style: none;
            display: flex;
            flex-direction:column;
        }
        label{
            padding-bottom: 0.5em;
        }
        h1{
            padding-left: 1.3em;
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <form action="" method="POST">
        <ul>
            <li>
               <label for="username">Username : </label>
               <input type="text" name="username" id="username" placeholder="enter username">
            </li>
            <li>
               <label for="password">Password : </label>
               <input type="password" name="password" id="password" placeholder="enter password">
            </li>
            <li>
               <label for="passconfirm">Re-type Password : </label>
               <input type="password" name="passconfirm" id="passconfirm" placeholder="confirm password">
            </li>
            <li>
                <button type="submit" name="register">Daftar</button>
            </li>
        </ul>
    </form>
</body>
</html>