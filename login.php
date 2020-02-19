<?php

session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


require 'function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set sesion
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="asset/avengers.png">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <div class="background">
            <div class="text">
                <h1>Login</h1>
                <p>No Account? <a href="signup.php">Sign Up</a></p>
            </div>
            <div class="box">


                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">username / password salah</p>
                <?php endif; ?>


                <form class="form" method="post" action="login.php">


                    <input type="text" name="username" id="username" class="username" placeholder="Username" required>

                    <input type="password" name="password" class="password" placeholder="Password" required>

                    <input type="submit" class="button" name="login" id="registrasi" value="Login">

                </form>
            </div>
        </div>
    </main>
</body>