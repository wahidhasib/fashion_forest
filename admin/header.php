<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Forest</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="../font_awesome/css/all.min.css">
    <link rel="stylesheet" href="../font_awesome/css/fontawesome.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="">

    <header class="bg-light" Id="header">
        <div class="container-xxl">
            <div class="row justify-content-between">
                <div class="col-lg-3 logo">
                    <a href="<?= $hostname; ?>/index.php" class=""><img src="img/logo.png" alt=""></a>
                </div>
                <div class="col-lg-8">
                    <nav class="navbar d-flex h-100 align-items-center justify-content-end">
                        <ul class="nav nav-tabs nav-justified w-100">
                            <li class="nav-item">
                                <a class="nav-link active fw-bolder fs-5" href="<?= $hostname; ?>/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/users.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/post.php">Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/category.php">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/basket.php">Basket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/order.php">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bolder fs-5 text-secondary"
                                    href="<?= $hostname; ?>/admin/profile.php">Profile</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>