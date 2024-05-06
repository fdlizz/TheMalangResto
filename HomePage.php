<?php
include "connect.php";
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
    <div>
        <div class="home">
            <?php
            include "navbar.php"
            ?>
            <div>
            </div>
        </div>
        <img class="opacity-100 fade" src="photo/fade.png" alt="">
    </div>
    <div class="Menu1">
        <div class="rekomend">
            <h1>Rekomendasi</h1>
        </div>
        <div class="makanan">
            <h1>Makanan</h1>
        </div>
        <div class="minuman">
            <h1>Minuman</h1>
        </div>
        <div class="snack">
            <h1>Snack</h1>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>