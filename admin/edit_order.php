<?php
include "config.php";
include "header.php";

if ($_SESSION['role'] == 0) {
    header("Location: $hostname/admin/");
}

if(isset($_GET['o_id'])) {
    $id = $_GET['o_id'];
}

$sql = "SELECT * FROM order_history LEFT JOIN users ON order_history.author_id = users.uid
                    LEFT JOIN products ON order_history.product_id = products.p_id
                    LEFT JOIN order_status ON order_history.status = order_status.s_id
                    LEFT JOIN payment_method ON order_history.pay_method = payment_method.method_id
                    WHERE o_id = $id";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-3 shadow-lg">
                <div class="card-header">
                    <h4 class="card-title">product name</h4>
                </div>
                <div class="card-body">

                    <form action="order_action.php" method="post">

                        <div class="row">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Order Id:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="order_id" value="<?= $row['o_id']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Title:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="p_name" value="<?= $row['p_name']; ?>">
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Size:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="size" value="<?= $row['size']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Shipping Address:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="address" value="<?= $row['address']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Contact Number:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="contact"
                                    value="<?= $row['contact_number']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Payment Method:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <select name="method" id="" class="form-select">
                                    <?php
                                    $query1 = "SELECT * FROM payment_method";
                                    $show = mysqli_query($conn, $query1);
                                    $paysystem = $show->fetch_all(MYSQLI_ASSOC);
                                    foreach ($paysystem as $method) {
                                        ?>
                                    <option value="<?= $method['method_id']; ?>" <?= $method['method_id'] == $row['pay_method'] ? "selected" : "" ?> ><?= $method['method']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Quantity:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" value="<?= $row['order_quantity']; ?>" name="order_qtty">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Product Price:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="price" value="<?= $row['c_price']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Delivery Charge:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="charge" value="<?= $row['delivery_charge']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Total:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="total_price" value="<?= $row['total']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Advance Payment:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="advance" value="<?= $row['advance']; ?>">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Due Payment:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <input type="text" class="form-control" name="due" value="<?= $row['due']; ?>">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-3">
                                <p class="text-dark fs-5 m-0 fw-bold">Order Status:</p>
                            </div>
                            <div class="col-8 border-bottom border-2 border-success">
                                <select name="status" id="" class="form-select">
                                    <?php
                                    $query = "SELECT * FROM order_status";
                                    $result1 = mysqli_query($conn, $query);
                                    $data = $result1->fetch_all(MYSQLI_ASSOC);
                                    foreach ($data as $item) { ?>
                                        <option value="<?= $item['s_id']; ?>" <?= $item['s_id'] == $row['s_id'] ? "selected" : "" ?>><?= $item['status']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-3">
                                <input type="submit" value="UPDATE" class="btn btn-primary w-100">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>