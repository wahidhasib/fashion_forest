<?php
include "config.php";

if(isset($_GET['delpost'])) {
    $deleteId = $_GET['delpost'];
    print_r($deleteId);
    $sql = "DELETE FROM products WHERE p_id = $deleteId;";
    $sql .= "UPDATE category SET total_post = total_post - 1";
    mysqli_multi_query($conn, $sql);
} elseif (isset($_POST['updatePost'])) {
    $updateId = $_POST['updatePost'];

} else {
    $title = $_POST['ptitle'];
    $description = $_POST['pdesc'];
    $oPrice = $_POST['oprice'];
    $cPrice = $_POST['cprice'];
    $category = $_POST['pcategory'];
    $quantity = $_POST['quantity'];

    for ($i = 0; $i < count($_FILES['pimage']['name']); $i++) {
        $file_name = $_FILES['pimage']['name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_type = $_FILES['pimage']['type'][$i];
        $size = $_FILES['pimage']['size'][$i];
        $tmp_name = $_FILES['pimage']['tmp_name'][$i];

        
        
    }
    $images = $file_name;
    print_r($images);


    

    $sql = "INSERT INTO products (p_name, o_price, c_price, p_category, p_image, stock, p_description) VALUES ('$title', '$oPrice', '$cPrice', $category, '$images', $quantity, '$description')";
    mysqli_query($conn, $sql) or die('Query failed: INSERT');
}

?>