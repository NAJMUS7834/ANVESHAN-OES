<?php 
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../includes/check_user.php'; 
include '../../includes/uniques.php';
$notice_id = 'NT-'.get_rand_numbers(8).'';
$post_date = date('d/m/Y h:i:s');
$title = ucwords(mysqli_real_escape_string($conn, $_POST['title']));
$description = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "INSERT INTO tbl_notice (notice_id, post_date, last_update, description, title)
VALUES ('$notice_id', '$post_date', '$post_date', '$description', '$title')";

if ($conn->query($sql) === TRUE) {
    header("location:../notice.php?rp=9174");
} else {
    header("location:../notice.php?rp=6389");
}

$conn->close();
?>
