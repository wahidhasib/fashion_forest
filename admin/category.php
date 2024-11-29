<?php
include "config.php";
include "header.php";

if ($_SESSION['role'] == 0) {
    header("Location: $hostname/admin/profile.php");
}

?>