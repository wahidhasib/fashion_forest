<?php include "config.php";
include "header.php"; ?>


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
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4012</td>
                        <td>Shmpoo</td>
                        <td><img src="img/hasib.png" alt="" height="40px" width="40px" style="object-fit: cover;"></td>
                        <td>$32.00</td>
                        <td>Rajbari, Dhaka, Bangladesh</td>
                        <td>Wahid Hasib</td>
                        <td>01740641911</td>
                        <td>Shipping</td>
                        <td>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-primary"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4012</td>
                        <td>Shmpoo</td>
                        <td><img src="img/hasib.png" alt="" height="40px" width="40px" style="object-fit: cover;"></td>
                        <td>$32.00</td>
                        <td>Rajbari, Dhaka, Bangladesh</td>
                        <td>Wahid Hasib</td>
                        <td>01740641911</td>
                        <td>Shipping</td>
                        <td>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-primary"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4012</td>
                        <td>Shmpoo</td>
                        <td><img src="img/hasib.png" alt="" height="40px" width="40px" style="object-fit: cover;"></td>
                        <td>$32.00</td>
                        <td>Rajbari, Dhaka, Bangladesh</td>
                        <td>Wahid Hasib</td>
                        <td>01740641911</td>
                        <td>Shipping</td>
                        <td>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-primary"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a href="<?= $hostname; ?>/admin/order_action.php" class="btn btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>