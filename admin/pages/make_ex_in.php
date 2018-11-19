<?php
include '../../database/config.php';
$exid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE tbl_examinations SET status='Inactive' WHERE exam_id='$exid'";

if ($conn->query($sql) === TRUE) {
    header("location:../examinations.php?rp=7823");
} else {
    header("location:../examinations.php?rp=1298");
}

$conn->close();
?>
