<!DOCTYPE html>
<html lang="en">
<?php

require_once __DIR__ . '/functions.php';
$randomPassword = '';


$passwordLength = intval($_GET['password']);

   
$randomPassword = generatePassword($passwordLength);

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
        <h1 class="m-auto w-50 text-center">Generatore di Password "quasi" Sicure</h1>
    </header>

    <main>
        <form action="" method="get">
            <label for="password">Inserisci la lunghezza della tua password</label>
            <input type="number" id="password" name="password">
            <button>
                Crea
            </button>
        </form>
        <?php
        // Mostra la password solo se è stata generata
        if (!empty($randomPassword)) {
            echo "<p>La tua password generata è: <strong>$randomPassword</strong></p>";
        }
        ?>
    </main>

    <footer>
        footer
    </footer>
</body>

</html>