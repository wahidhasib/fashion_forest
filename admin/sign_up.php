<?php include "config.php";
session_start();

if (isset($_SESSION['username'])) {
    header("Location: $hostname/");
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
                <h2 class="text-dark h4 text-center my-3 fw-bolder">Create a New Acoount</h2>
                <form action="<?= $hostname; ?>/admin/action.php" class="form" method="POST">
                    <div class="form-group mb-3">
                        <label for="fname" class="form-label fs-5">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter your First Name" name="fname" id="fname">
                    </div>
                    <div class="form-group mb-3">
                        <label for="lname" class="form-label fs-5">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname" id="lname" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label fs-5">User Name</label>
                        <input type="text" class="form-control" placeholder="Enter your User name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="role" class="form-label fs-5">User Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="0" selected>Normal User</option>
                            <option value="1" disabled>Admin</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your Password" name="password" id="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="re_password" class="form-label fs-5">Retype Password</label>
                        <input type="password" class="form-control" placeholder="Enter your Password Again" name="re_password" id="re_password">
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary fs-5 py-1 fw-bold w-50" value="Sign Up" name="submit">
                    </div>
                    <div class="exitst d-flex justify-content-between">
                        <p class="text-secondary fs-5 m-0">Allready have an account?</p>
                        <a href="<?= $hostname; ?>/admin/index.php" class="btn-success btn text-uppercase fw-bolder">Log In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>