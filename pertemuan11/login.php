<?php
    require 'function.php';
    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username';");
        if(mysqli_num_rows($result)===1){
            $data = mysqli_fetch_assoc($result);
            if(password_verify($password, $data["password"])){
                header('Location: index.php');
                exit;
            }
        }
        $error = true;
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
            padding-bottom: 0.5em;
            width: 300px;
            list-style: none;
            display: flex;
            flex-direction:column;
        }
        h1{
            padding-left: 1.3em;
        }li{
            list-style: none;
        }
        p{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <?php if($error): ?>
        <p>Login error</p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
               <label for="username"></label>
               <input type="text" name="username" id="username" placeholder="enter username">
            </li>
            <li>
               <label for="password"></label>
               <input type="password" name="password" id="password" placeholder="enter password">
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>
</html>