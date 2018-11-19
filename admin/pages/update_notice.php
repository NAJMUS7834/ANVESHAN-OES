<?php 
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../includes/check_user.php'; 
include '../../includes/uniques.php';
$notice_id = $_POST['notice_id'];
$post_date = date('d/m/Y h:i:s');
$title = ucwords(mysqli_real_escape_string($conn, $_POST['title']));
$description = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "UPDATE tbl_notice SET last_update = '$post_date', description = '$description', title = '$title'  WHERE notice_id='$notice_id'";

if ($conn->query($sql) === TRUE) {
header("location:../edit-notice.php?rp=7823&id=$notice_id");
} else {
header("location:../edit-notice.php?rp=1298&id=$notice_id");
}

$conn->close();
?>

