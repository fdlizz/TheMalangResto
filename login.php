<?php
include "connect.php";

?>

<!DOCTYPE html>

<head>
    <!--text atas-->
    <title>The Malang Resto</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <!-- icon -->
    <link rel="shortcut icon" href="photo/logo.jpeg">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="w-100">
        <div>
            <img class="bg" src="photo/TMR1.jpg" alt="ini gambar">
            <img class="bg2" src="photo/login.png" alt="ini gambar">
        </div>
        <!-- Title -->
        <div class="w-100 p-4">
            <div class="w-25">
                <h2 class="w-75 text-center Title">The Malang Resto</h2>
            </div>
        </div>
        <!-- Input -->
        <div class="container-form">
            <div class="login-form">
                <h1 class="text-center">Login</h1>
                <div class="User mt-4 login-label">
                    <form method="post" action="">
                        <label>Nama:</label><br>
                        <input type="text" name="nama"><br><br>
                        <label>Password:</label><br>
                        <input type="password" name="password"><br><br>

                        <div class="w-100 mt-5">
                            <input type="submit" value="Login" name="login">
                        </div>
                    </form>
                    <!-- Button -->
                    <div class="FG">
                        <button class=bt>Forgot Password?</button>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-5">
                <button class="button1">Login</button>
                <div class="flex container-divider">
                    <div class="divider"></div>
                    <p class="px-3 or">Or</p>
                    <div class="divider"></div>
                </div>
                <button class="button1">Register</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>