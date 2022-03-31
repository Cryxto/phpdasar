<?php
    if(isset($_POST["submit"])){
        if($_POST["username"]=="admin" && $_POST["password"]=="321123"){
            header("Location:admin.php");
            exit;
        }else{
            $error = true;
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
        h2{
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php if(isset($error)): ?>
        <h2>Username atau password salah !</h2>
    <?php endif; ?>
    <h1>Login Admin</h1>
    <form action="" method="POST">
        <div>
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" placeholder="enter username">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" placeholder="enter password">
            </p>
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>

</html>