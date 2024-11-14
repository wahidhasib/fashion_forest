<?php include "config.php";
include "header.php";
session_start();
?>



<div class="container-xl">
    <div class="row my-5">
        <div class="col-6">
            <h2 class="text-secondary m-0">All Users</h2>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="<?= $hostname; ?>/admin/add_user.php" class="btn btn-primary">Add User/Admin</a>
        </div>
        <div class="col-md-12 mt-2">
            <table class="table table-striped table-secondary table-bordered">
                <thead>
                    <tr class="table-active table-dark">
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail</th>
                        <th>Number</th>
                        <th>Role</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $limit = 3;
                    $page = isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
                    $offset = ($page - 1) * $limit;
                    $sql = "SELECT * FROM users ORDER BY role DESC LIMIT $offset, $limit";
                    $result = mysqli_query($conn, $sql) or die('Query failed from show user');
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($data as $row) {
                        ?>
                        <tr>
                            <td class=""><?= $row['uid']; ?></td>
                            <td class=""><?= $row['fname']; ?></td>
                            <td class=""><?= $row['lname']; ?></td>
                            <td class=""><?= $row['username']; ?></td>
                            <td class=""><?= $row['number']; ?></td>
                            <td class="">
                                <?=
                                    $row['role'] == 1 ? 'Admin' : 'Normal User';
                                ?>
                            </td>
                            <td class="py-1">
                                <img src="img/<?= $row['image']; ?>" alt="" height="40px" width="40px"
                                    style="object-fit: cover;">
                            </td>
                            <td class="">
                                <a href="<?= $hostname; ?>/admin/edit_user.php?id=<?= $row['uid']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hey!!! <?= $_SESSION['fname']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete user <?= $row['username']; ?> parmanently?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="<?= $hostname; ?>/admin/user_action.php?deleteId=<?= $row['uid']; ?>" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
        $query = "SELECT * FROM users";
        $pagRes = mysqli_query($conn, $query);
        if (mysqli_num_rows($pagRes) > 0) {
            $records = mysqli_num_rows($pagRes);
            $totalPage = ceil($records / $limit);
            ?>
            <ul class="pagination d-flex justify-content-center">
                <?php
                if ($page > 1) { ?>
                    <li class="page-item"><a href="<?= $hostname; ?>/admin/users.php?page=<?= $page - 1; ?>"
                            class="page-link">Prev</a></li>
                <?php }
                for ($i = 1; $i <= $totalPage; $i++) {
                    ($i == $page) ? $active = 'active' : $active = '';
                    ?>
                    <li class="page-item <?= $active; ?>"><a class="page-link"
                            href="<?= $hostname; ?>/admin/users.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                <?php }
                if ($page < $totalPage) {
                    ?>
                    <li class="page-item"><a href="<?= $hostname; ?>/admin/users.php?page=<?= $page + 1; ?>"
                            class="page-link">Next</a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>




<?php include "footer.php"; ?>