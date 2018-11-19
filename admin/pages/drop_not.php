<?php
include '../../database/config.php';
$ntid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_notice WHERE notice_id='$ntid'";

if ($conn->query($sql) === TRUE) {
    header("location:../notice.php?rp=7823");
} else {
    header("location:../notice.php?rp=1298");
}

$conn->close();
?>
