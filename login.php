<?php
include "connect.php";
include "data.php";
?>

<body>
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
                    <div class="form-floating mb-3 ">
                        <input type=" email" class="form-control login-input" id="floatingInput" placeholder="">
                        <label class="name" for="floatingInput">Username or Email</label>
                    </div>
                    <div class="form-floating">
                        <input tpe="password" class="form-control login-input" id="floatingPassword" placeholder="">
                        <label class="name" for="floatingPassword">Password</label>
                    </div>
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