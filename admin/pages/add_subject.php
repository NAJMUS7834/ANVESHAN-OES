<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$subject_id = 'SB-'.get_rand_numbers(6).'';
$subject_name =   ucwords(mysqli_real_escape_string($conn, $_POST['subject']));
$department_name = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$category_name = ucwords(mysqli_real_escape_string($conn, $_POST['category']));
$date_registered = date('d-m-Y');

$sql = "SELECT * FROM tbl_subjects WHERE name = '$subject_name' AND department = '$department_name' AND category = '$category_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    header("location:../subject.php?rp=1185");
    }
} else {

$sql = "INSERT INTO tbl_subjects (subject_id, name, department, category, date_registered)
VALUES ('$subject_id', '$subject_name', '$department_name', '$category_name', '$date_registered')";

if ($conn->query($sql) === TRUE) {
    header("location:../subject.php?rp=3598");
} else {
    header("location:../subject.php?rp=1925");
}


}
$conn->close();
?>


