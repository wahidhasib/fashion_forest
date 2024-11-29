<?php include "config.php";
include "header.php";

if ($_SESSION['role'] == 0) {
    header("Location: $hostname/admin/profile.php");
}

?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-dark table-hover">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Product Price</th>
                        <th>Shipping Address</th>
                        <th>Coustomer Name</th>
                        <th>Contact Number</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Advance</th>
                        <th>Due</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $limit = 10;
                    $page = isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
                    $offset = ($page - 1) * $limit;

                    $sql = "SELECT * FROM order_history LEFT JOIN users ON order_history.author_id = users.uid
                    LEFT JOIN products ON order_history.product_id = products.p_id
                    LEFT JOIN order_status ON order_history.status = order_status.s_id LIMIT $offset, $limit";

                    $result = mysqli_query($conn, $sql);
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($data as $row) { ?>
                        <tr>
                            <td><?= $row['o_id']; ?></td>
                            <td><?= $row['p_name']; ?></td>
                            <td><img src="product/<?= $row['p_image']; ?>" alt="" height="40px" width="40px"
                                    style="object-fit: cover;"></td>
                            <td>$<?= $row['c_price']; ?></td>
                            <td>Rajbari, Dhaka, Bangladesh</td>
                            <td><?= $row['fname'] . " " . $row['lname']; ?></td>
                            <td><?= $row['contact_number']; ?></td>
                            <td><?= $row['order_quantity']; ?></td>
                            <td><?= $row['total']; ?></td>
                            <td><?= $row['advance']; ?></td>
                            <td><?= $row['due']; ?></td>
                            <td><?= $row['status']; ?></td>
                            <td>
                                <a href="<?= $hostname; ?>/admin/edit_order.php?o_id=<?= $row['o_id']; ?>"
                                    class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="<?= $hostname; ?>/admin/order_action.php?del_id=<?= $row['o_id']; ?>"
                                    class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
        $order_query = "SELECT * FROM order_history";
        $pagRes = mysqli_query($conn, $order_query);
        if (mysqli_num_rows($pagRes) > 0) {
            $records = mysqli_num_rows($pagRes);
            $total_page = ceil($records / $limit);
            ?>

            <ul class="pagination d-flex justify-content-center">
                <?php if ($page > 1) { ?>
                    <li class="page-item">
                        <a href="<?= $hostname; ?>/admin/order.php?page=<?= $page - 1; ?>" class="page-link">Prev</a>
                    </li>
                <?php }
                for ($i = 1; $i <= $total_page; $i++) {
                    ($i == $page) ? $active = "active" : $active = "" ?>
                    <li class="page-item <?= $active; ?>">
                        <a href="<?= $hostname; ?>/admin/order.php?page=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                    </li>
                <?php } ?>
            </ul>

        <?php } ?>
    </div>
</div>


<?php include "footer.php"; ?>