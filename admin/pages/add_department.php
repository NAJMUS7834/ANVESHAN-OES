<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$department_id = 'DP-'.get_rand_numbers(6).'';
$department_name = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$date_registered = date('d-m-Y');

$sql = "SELECT * FROM tbl_departments WHERE name = '$department_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    header("location:../departments.php?rp=1185");
    }
} else {

$sql = "INSERT INTO tbl_departments (department_id, name, date_registered)
VALUES ('$department_id', '$department_name', '$date_registered')";

if ($conn->query($sql) === TRUE) {
    header("location:../departments.php?rp=9275");
} else {
    header("location:../departments.php?rp=5426");
}


}
$conn->close();
?>


