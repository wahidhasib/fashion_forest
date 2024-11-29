<?php include "config.php";
include "header.php";

if ($_SESSION['role'] == 0) {
    header("Location: $hostname/admin/");
}


$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$userName = mysqli_real_escape_string($conn, $_POST['username']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$rePassword = mysqli_real_escape_string($conn, md5($_POST['re_password']));
$number = mysqli_real_escape_string($conn, $_POST['number']);
$image = $_FILES['u_image']['name'];

$errors = array();
$extention = ['jpg', 'jpeg', 'png'];

$file_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
$file_type = $_FILES['u_image']['type'];
$size = $_FILES['u_image']['size'];
$tmp_name = $_FILES['u_image']['tmp_name'];

if (in_array($file_ext, $extention) === false) {
    $errors[] = "This file extention is not supported... Please submit JPG or PNG file";
}
if ($size > 2097152) {
    $errors[] = "File size must be less than 2MB";
}

if (empty($errors) === true) {
    move_uploaded_file($tmp_name, "img/" . $image);
} else {
    print_r($errors);
    die();
}

$sql = "INSERT INTO users (fname, lname, username, role, password, number, image) VALUES ('$fname', '$lname', '$userName', $role, '$password', '$number', '$image')";
mysqli_query($conn, $sql);

?>
<div class="container-fluid login-container py-3">
    <div class="row justify-content-center align-items-center px-2">
        <div class="col-sm-10 col-md-7 col-lg-6 col-xxl-4 py-3 px-3 rounded-3 shadow-lg">
            <div class="logo d-flex justify-content-center">
                <a href="<?= $hostname; ?>/index.php" class=""><img src="img/fashion_forest.png" alt=""
                        class="site_logo rounded-3"></a>
            </div>
            <div class="heading d-flex justify-content-between align-items-center">
                <h2 class="text-dark h4 text-center my-3 fw-bolder">Create a New Acoount</h2>
                <a href="<?= $hostname; ?>/admin/users.php" class="btn btn-success">Back</a>
            </div>
            <form action="<?= $hostname; ?>/admin/user_action.php" class="form" method="POST"
                enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="fname" class="form-label fs-5">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First Name" name="fname" id="fname"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="lname" class="form-label fs-5">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname" id="lname"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="username" class="form-label fs-5">User Name</label>
                    <?php
                    $sql1 = "SELECT username FROM users";
                    $result1 = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($result);

                    if (isset($_POST['submit'])) {
                        if ($data['username'] == $_POST['username']) {
                            echo "Username is already exist";
                        }
                    }
                    ?>
                    <input type="email" class="form-control" placeholder="Enter your E-mail" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="number" class="form-label fs-5">Contact Number</label>
                    <input type="text" placeholder="Enter your contact number" id="number" name="number"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="role" class="form-label fs-5">User Role</label>
                    <select name="role" id="role" class="form-select">
                        <option value="0" selected>Normal User</option>
                        <option value="1">Admin</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label fs-5">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your Password" name="password"
                        id="password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="re_password" class="form-label fs-5">Retype Password</label>
                    <input type="password" class="form-control" placeholder="Enter your Password Again"
                        name="re_password" id="re_password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="u_image" class="form-label fs-5">Photo</label>
                    <input type="file" class="form-control" name="u_image" id="u_image" required>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary fs-5 py-1 fw-bold w-50" value="Sign Up" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>