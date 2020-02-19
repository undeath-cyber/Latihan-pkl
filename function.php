<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "undeath");




function registrasi($data)
{
    global $conn;

    $fullname = strtolower(stripslashes($data["fullname"]));
    $username = strtolower(stripslashes($data["username"]));
    $email  = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }


    //  cek email
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('email sudah digunakan!')
		      </script>";
        return false;
    }



    // cek konfirmasi password
    if ($password !== $password1) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$fullname','$username','$email','$password')");

    return mysqli_affected_rows($conn);
}
