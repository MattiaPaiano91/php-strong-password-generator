<!DOCTYPE html>
<html lang="en">
<?php

require_once __DIR__ . '/functions.php';
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Template php</title>
</head>

<body>
    <header>
        <h1 class="m-auto w-50 text-center mt-5 ">Generatore di Password "quasi" Sicure</h1>
    </header>

    <main>
        <form class="m-5" action="" method="post">
            <label class="form-label" for="password">Inserisci la lunghezza della tua password:</label>
            <input type="number" class="form-control w-25 " id="password" name="password">
            <button class="btn btn-outline-primary mt-3 ">
                Crea
            </button>
        </form>
        <?php

            if (empty($_SESSION['passwordLength']) && empty($_SESSION['randomPassword'])) {
                echo "<div class='ms-5'>  Il generatore è fermo! </div>";
            }
            else{
                echo "<div class='ms-5'> La tua password generata è: {$_SESSION['randomPassword']} </div>";

                echo "<button class='btn btn-outline-primary ms-5 mt-3 d-block '><a class='text-primary text-decoration-none' href='stop.php'> Ferma il generatore </a><button>";
            }
        ?>
    </main>


</body>

</html>