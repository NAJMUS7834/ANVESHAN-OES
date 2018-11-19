<?php
include '../../database/config.php';
$sid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE tbl_users SET acc_stat='0' WHERE user_id='$sid'";

if ($conn->query($sql) === TRUE) {
    header("location:../students.php?rp=7823");
} else {
    header("location:../students.php?rp=1298");
}

$conn->close();
?>
