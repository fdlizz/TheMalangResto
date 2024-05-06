<?php
include "connect.php";

session_start();

if (isset($_POST['submit'])) {
    // Bersihkan input dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO user (nama_user, email_user, password_user) VALUES ('$nama', '$email', '$password')";
    $register = mysqli_query($koneksi, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Malang Resto</title>
    <link rel="shortcut icon" href="photo/logo.jpeg">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="w-100">
        <div>
            <img class="img1" src="photo/TMR1.jpg" alt="ini gambar">
            <img class="img2" src="photo/login.png" alt="ini gambar">
        </div>
        <!-- Title -->
        <div class="w-100 p-4">
            <div class="w-25">
                <h2 class="w-75 text-center Title">The Malang Resto</h2>
            </div>
        </div>
        <!-- Input -->
        <!-- login page -->
        <div class="px-5">
            <div class="px-5">
                <h1 class="register-form px-5 m-0 fs-1 fst-italic">Registrasi</h1>
            </div>
        </div>
        <div>
            <form method="post" action="">
                <label>Nama:</label><br>
                <input type="text" name="nama"><br><br>
                <label>Email:</label><br>
                <input type="email" name="email"><br><br>
                <label>Password:</label><br>
                <input type="password" name="password"><br><br>
        </div>

        <div class="w-100 mt-5">
            <input type="submit" value="Register" name="submit">
        </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>