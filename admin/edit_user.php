<?php include "config.php";
include "header.php"; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE uid = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container-fluid">
    <div class="row login-container justify-content-center align-items-center px-2">
        <div class="col-sm-10 col-md-7 col-lg-6 col-xxl-4 py-3 px-3 rounded-3 shadow-lg">
            <div class="logo d-flex justify-content-center">
                <a href="<?= $hostname; ?>/index.php" class=""><img src="img/fashion_forest.png" alt=""
                        class="site_logo rounded-3"></a>
            </div>
            <div class="heading d-flex justify-content-between align-items-center">
                <h2 class="text-dark h4 text-center my-3 fw-bolder">Create a New Acoount</h2>
                <a href="<?= $hostname; ?>/admin/users.php" class="btn btn-success">Back</a>
            </div>
            <form action="<?= $hostname; ?>/admin/user_action.php" class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="fname" class="form-label fs-5">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First Name" name="fname" id="fname" value="<?= $row['fname']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="lname" class="form-label fs-5">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname" id="lname" value="<?= $row['lname']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="username" class="form-label fs-5">User E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter your E-mail" value="<?= $row['username']; ?>" name="username">
                    <input type="text" value="<?= $row['number']; ?>" name="number">
                </div>
                <div class="form-group mb-3">
                    <label for="role" class="form-label fs-5">User Role</label>
                    <select name="role" id="role" class="form-select">
                        <option value="0" <?= $row['role'] == 0 ? 'selected' : '' ?>>Normal User</option>
                        <option value="1" <?= $row['role'] == 1 ? 'selected' : '' ?>>Admin</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="u_image" class="form-label fs-5">Photo</label>
                    <input type="file" class="form-control" name="new-image" id="u_image">
                    <img src="img/<?= $row['image']; ?>" alt="" height="60px" width="60px" style="object-fit: cover;">
                </div>

                <div class="form-group mb-3">
                    <input type="hidden" value="<?= $row['image']; ?>" name="old-image">
                    <input type="hidden" value="<?= $row['uid']; ?>" name="updateId">
                    <input type="submit" class="btn btn-primary fs-5 py-1 fw-bold w-50" value="Update" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>