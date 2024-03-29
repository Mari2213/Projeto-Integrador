<?php

session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php'</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand"> Biblioteca X</a>
        <?php
        print "Olá, " . $_SESSION["nome"];
        print "<a href='logout.php' class='btn btn-danger'>Sair <i class='bi bi-box-arrow-right'></i></a>";
        ?>
    </div>
</nav>
<div class="container-lg">
    <div class="mb-4 p-4">
        <button type="submit" class="btn btn-primary">Butão X</button>
    </div>
    <div class="mb-4 p-4">
        <button type="submit" class="btn btn-primary">Butão Y</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>