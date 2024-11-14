<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Forest</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="font_awesome/css/all.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="font_awesome/css/fontawesome.css">
    <!-- swiper slider cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">

    <!-- fabicon -->
    <link rel="icon" href="image/logo-dark.png">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white" id="header">
        <div class="container">
            <a class="navbar-brand fs-3 text-dark fw-bold" href="<?= $hostname ?>/index.php">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark nav-active menu-link" href="<?= $hostname; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark menu-link" href="<?= $hostname; ?>/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark menu-link" href="<?= $hostname; ?>/shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark menu-link" href="<?= $hostname; ?>/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark menu-link" href="<?= $hostname; ?>/contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" action="search.html">
                    <input class="form-control searchInput" type="text" placeholder="Search" />
                    <button class="btn btn-outline-dark searchBtn" type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>