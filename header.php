<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Forest</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="font_awesome/css/all.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="font_awesome/css/fontawesome.css">
    <!-- swiper slider cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/secondary.css">
    <!-- fabicon -->
    <link rel="icon" href="image/logo-dark.png">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white" id="header">
        <div class="container-lg">
            <a class="navbar-brand fs-3 text-dark fw-bold" href="<?= $hostname ?>/index.php">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark nav-active menu-link"
                            href="<?= $hostname; ?>/index.php">Home</a>
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
                <form class="d-flex" action="search.php">
                    <input class="form-control searchInput" type="text" placeholder="Search" />
                    <button class="btn btn-outline-dark searchBtn" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary ms-1" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Shopping Cart</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row align-items-center">
                                        <div class="cart-pro-img">
                                            <img src="admin/product/product2.jpg" alt="" class="mw-100 mh-100">
                                        </div>
                                        <div class="cart-pro-details col-7">
                                            <h4 class="text-dark m-0">Product name <span class="text-seconday fs-5">x 5</span></h4>
                                            <p class="text-dark m-0">$25.00</p>
                                        </div>
                                        <div class="col-3">
                                            <a href="" class="text-success fs-4"><i class="fa-solid fa-credit-card"></i></a>
                                            <a href="" class="text-danger fs-4"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>