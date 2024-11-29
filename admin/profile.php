<?php include "config.php";
include "header.php";

if (!isset($_SESSION['username'])) {
    header("Location: $hostname/admin/");
}

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
}

$sql = "SELECT * FROM users WHERE uid = $id";
$result = mysqli_query($conn, $sql) or die("Query Failed: profile");
$row = $result->fetch_assoc();

?>



<div class="container-xxl my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="profile">
                <div class="card-header d-flex justify-content-between bg-primary">
                    <h2 class="card-title m-0 text-light h3"><?= $_SESSION['username']; ?></h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Log Out
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure You want to Log Out from your account?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger"><a
                                            href="<?= $hostname; ?>/admin/logout.php"
                                            class="text-decoration-none text-white">LOG OUT</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="user-image shadow-lg">
                                <img src="img/<?= $row['image']; ?>" alt="" class="mw-100 mh-100" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6 border-start border-5 border-primary">
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">First Name:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['fname']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">Last Name:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['lname']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">Username/E-mail:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['username']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">Role:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['role'] == 1 ? "Admin" : "Normal User"; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">First Name:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['number']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">Joining Date:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['join_date']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">First Name:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['fname']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <span class="text-dark fw-bold fs-5">First Name:</span>
                                </div>
                                <div class="col-8 border-2 border-primary border-bottom">
                                    <p class="text-dark m-0 fs-5"><?= $row['fname']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include "footer.php"; ?>