<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$category_id = 'CT-'.get_rand_numbers(6).'';
$category_name =   ucwords(mysqli_real_escape_string($conn, $_POST['category']));
$department_name = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$date_registered = date('d-m-Y');

$sql = "SELECT * FROM tbl_categories WHERE name = '$category_name' AND department = '$department_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    header("location:../categories.php?rp=1185");
    }
} else {

$sql = "INSERT INTO tbl_categories (category_id, name, department, date_registered)
VALUES ('$category_id', '$category_name', '$department_name', '$date_registered')";

if ($conn->query($sql) === TRUE) {
    header("location:../categories.php?rp=1289");
} else {
    header("location:../categories.php?rp=7732");
}


}
$conn->close();
?>


