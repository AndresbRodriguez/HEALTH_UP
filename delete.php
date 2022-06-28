<?php
include ("config/config.php");

if (isset($_GET['ID_P'])) {
    $ID_P = $_GET['ID_P'];
    $query = "DELETE * FROM persona where ID_P='$ID_P'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Error");
        header('Location: signin.php');
    }
}
