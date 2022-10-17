<?php
require __DIR__ . '/data/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./style/main.css">
    <title>PHP - Dischi</title>
</head>
<body>
    <!-- Header -->
    <header class="container-fluid p-3">
        <img src="./img/logo.png" alt="">
    </header>

    <!-- Main -->
    <section class="container-fluid main-content p-5">
        <div class="container">
            <div class="row">
            <?php foreach($database as $value) : ?>
            <?php?>
            </div>
        </div>
    </section>
            
</body>
</html>