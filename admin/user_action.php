<?php
include "config.php";

if (isset($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    print_r($deleteId);
    die();

    $sql1 = "SELECT * FROM users WHERE uid = $deleteId";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);

    unlink("img/" . $row['image']);

    $sql = "DELETE FROM users WHERE uid = $deleteId";
} else if (isset($_POST['updateId'])) {
    $updateId = mysqli_real_escape_string($conn, $_POST['updateId']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    if(empty($_FILES['new-image']['name'])) {
        $image = $_POST['old-image'];
    } else {
        $image = $_FILES['new-image']['name'];
        $errors = array();

        $type = $_FILES['new-image']['type'];
        $tmp_name = $_FILES['new-image']['tmp_name'];
        $size = $_FILES['new-image']['size'];
        $file_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        $extention = ['jpg', 'jpeg', 'png'];

        if(in_array($file_ext, $extention) === false) {
            $errors[] = "This extention file is not allowed, Please choose a JPG or PNG file";
        }
        if($size > 2097152) {
            $errors[] = "File size must be less than 2MB";
        }
        if(empty($errors) == true) {
            move_uploaded_file($tmp_name, "img/" . $image);
        } else {
            print_r($errors);
            die();
        }
    }


    $sql = "UPDATE users SET fname = '$fname', lname = '$lname', username = '$username', number = '$number', role = $role, image = '$image' WHERE uid = $updateId";
} else {
    
}

mysqli_query($conn, $sql) or die("Insert user Query Failed");
// header("Location: $hostname/admin/users.php");
?>