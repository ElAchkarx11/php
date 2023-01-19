<?php

include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DosDVerdade</title>

    <!-- Link para boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Link para boostrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- Icones Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS do site -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/estilo.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container-fluid justify-content-end text-end" id="header-container">
                <div id="area-brand">
                    <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php"> <img src="<?= $BASE_URL ?>/img/logo.svg"
                            alt="" id="logo"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                        <a class="nav-link" href="#">CATEGORIAS</a>
                        <a class="nav-link" href="<?= $BASE_URL ?>/contato.php">CONTATO</a>
                        <a class="nav-link" href="#">SOBRE</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>