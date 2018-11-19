<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$exam_id = $_POST['examid'];
$exam = ucwords(mysqli_real_escape_string($conn, $_POST['exam']));
$duration = mysqli_real_escape_string($conn, $_POST['duration']);
$passmark = mysqli_real_escape_string($conn, $_POST['passmark']);
$attempts = mysqli_real_escape_string($conn, $_POST['attempts']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$terms = ucfirst(mysqli_real_escape_string($conn, $_POST['instructions']));

$sql = "SELECT * FROM tbl_examinations WHERE exam_name = '$exam' AND subject = '$subject' AND category = '$category' AND exam_id != '$exam_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
header("location:../examinations.php?rp=1185");
    }
} else {

$sql = "UPDATE tbl_examinations SET category = '$category', subject = '$subject', exam_name = '$exam', date = '$date', duration = '$duration', passmark = '$passmark', re_exam = '$attempts', terms = '$terms' WHERE exam_id='$exam_id'";

if ($conn->query($sql) === TRUE) {
header("location:../edit-exam.php?rp=7823&eid=$exam_id");
} else {
header("location:../edit-exam.php?rp=1298&eid=$exam_id");
}


}
$conn->close();
?>
