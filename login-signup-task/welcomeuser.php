<?php
$id = $_GET["id"];
if ($id == "") {
    header("location:login-page.php");
    die();
}
echo "welcome" . " " . $id;
