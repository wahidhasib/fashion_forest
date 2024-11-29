<?php
include "config.php";
include "header.php";

if(!isset($_SESSION['username'])) {
    header("Location: $hostname/admin/");
}

?>