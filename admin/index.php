<?php include "config.php";
session_start();
if(isset($_SESSION['username'])) {
    header("Location: $hostname/admin/users.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Forest</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="../font_awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../font_awesome/css/all.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row login-container justify-content-center align-items-center px-2">
            <div class="col-sm-10 col-md-7 col-lg-6 col-xxl-4 py-5 px-3 rounded-3 shadow-lg">
                <div class="logo d-flex justify-content-center">
                    <a href="<?= $hostname; ?>/index.php" class=""><img src="img/fashion_forest.png" alt=""
                            class="site_logo rounded-3"></a>
                </div>
                <h2 class="text-dark h4 text-center my-3 fw-bolder">Login with your Fashion Forest Account</h2>

                <?php
                if (isset($_POST['login'])) {
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

                    $sql = "SELECT * FROM users WHERE username = '$email' AND password = '$password'";
                    $result = mysqli_query($conn, $sql) or die('Query Faled: Login');

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['user_id'] = $row['uid'];
                            $_SESSION['fname'] = $row['fname'];

                            $_SESSION['message'] = "Login successfully";
                        }
                    } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="text-dark fw-bold m-0">Username and Password are not matched.</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php }
                }
                ?>

                <form action="<?= $_SERVER['PHP_SELF']; ?>" class="form" method="POST">
                    <div class="form-group mb-3">
                        <label for="username" class="form-label fs-5">User Name</label>
                        <input type="email" class="form-control" placeholder="Enter your User name" name="email"
                            id="username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your Password" name="password"
                            id="password" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary fs-5 py-1 fw-bold w-50" value="Log In" name="login">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-secondary fs-5 p-0 m-0">Don't Have an Account?</p>
                        <a href="<?= $hostname; ?>/admin/sign_up.php"
                            class="btn-success btn fw-bolder text-uppercase">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>