<?php
session_start();
if (isset($_POST["delete"])) {
    $deletedUser = $_POST["delete-user"];
    unset($_SESSION[$deletedUser]);
    header("location:admin-dashboard.php");
}
