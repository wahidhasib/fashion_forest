<?php
include "config.php";

if(isset($_POST['order_id'])) {
    $updateId = $_POST['order_id'];
}

if(isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];
}

if(isset($del_id)) {
    $sql = "DELETE FROM order_history WHERE o_id = $del_id";
} elseif($updateId) {
    $size = $_POST['size'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $method = $_POST['method'];
    $qtty = $_POST['order_qtty'];
    $delivery = $_POST['charge'];
    $total_price = $_POST['total_price'];
    $advance = $_POST['advance'];
    $due = $_POST['due'];
    $status = $_POST['status'];

    $sql = "UPDATE order_history SET order_quantity = $qtty, status = $status, size = '$size', address = '$address', contact_number = '$contact', pay_method = $method, total = $total_price, due = $due, advance = $advance, delivery_charge = $delivery WHERE o_id = $updateId";
    print_r($sql);
}

mysqli_query($conn, $sql) or die("Query failed");

?>