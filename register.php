<?php
include "connect.php";
include "data.php"
?>

<body>
    <div class="w-100">
        <div>
            <img class="img1" src="photo/TMR1.jpg" alt="ini gambar">
            <img class="img2" src="photo/loginfade.png" alt="ini gambar">
        </div>

        <div class="w-100 p-4">
            <div class="w-25">
                <h2 class="w-75 text-center Title">The Malang Resto</h2>
            </div>
        </div>

        <!-- login page -->
        <div class="container-form">
            <!-- ******* -->
            <div class="register-form">
                <h1 class="text-center">Register</h1>
                <div class="User mt-4 register-label">
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control login-input" id="floatingInput" placeholder="name@example.com">
                        <label class="reg" for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input tpe="password" class="form-control login-input" id="floatingPassword" placeholder="">
                        <label class="reg" for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating">
                        <input tpe="password" class="form-control login-input" id="floatingPassword" placeholder="">
                        <label class="reg" for="floatingPassword">Password</label>
                    </div>
                </div>
            </div>

            <div class="w-100 mt-5">
                <button class="BT-form">Register</button>
            </div>
        </div>
    </div>
</body>