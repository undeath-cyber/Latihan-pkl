<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('user baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="asset/avengers.png">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Sign Up</h1>
                <p>Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <form action="signup.php" method="post">

                    <input type="text" name="fullname" id="fullname" class="fullname" placeholder="Your Fullname" required>

                    <input type="text" name="username" id="username" class="username" placeholder="Username" required>

                    <input type="email" name="email" id="email" class="email" placeholder="someone@abc.com" required>

                    <input type="password" name="password" class="password" placeholder="Password" required><br>

                    <input type="password" name="password1" class="password1" placeholder="Confirm Password" required><br>

                    <input type="submit" class="button" name="register" id="registrasi" value="Create Account">

                </form>
            </div>
        </div>
    </main>
</body>

</html>