<?php
    session_start();
    require_once "../db.php";

    $user = ( isset($_POST["user"]) ) ? $_POST["user"] : "";
    $pass = ( isset($_POST["pass"]) ) ? $_POST["pass"] : "";
    $message = "";

    $sql = "SELECT * FROM `user` WHERE `user`='$user' && `pass`='".(md5($pass))."' && `role`='admin' && `status`=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // if($user == "admin1" && $pass == "admin123") {
        $_SESSION["user"] = $user;
        header("Location: index.php");
        die();
    } else {
        $message = "Adimin parolu duz yaz";
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body { height: 100vh; margin: 0; display: flex }
            form { margin: auto; padding: 30px; box-shadow: 0 0 10px #333 }
            input { padding: 5px 10px; border: 1px solid #333; border-radius: 5px; }
        </style>
    </head>
    <body>
        <form method="POST">
            <p><input type="text" name="user" /></p>
            <p><input type="password" name="pass" /></p>
            <p><input type="submit" value="Log in" /></p>
            <p><?=$message?></p>
        </form>
    </body>
</html>