<?php
include '../../database/config.php';
include '../includes/check_user.php';
$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' AND user_id !='$myid' OR phone = '$phone' AND user_id !='$myid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
	$sph = $row['phone'];
	if ($sem == $email) {
	 header("location:../profile.php?rp=1189");	
	}else{
	
	if ($sph == $phone) {
	 header("location:../profile.php?rp=2074");	
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "UPDATE tbl_users SET first_name = '$fname', last_name = '$lname', gender = '$gender', dob = '$dob', email = '$email', phone = '$phone' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {
	$_SESSION['first_name'] = $fname;
	$_SESSION['last_name'] = $lname;
	$_SESSION['gender'] = $gender;
	$_SESSION['dob'] = $dob;
	$_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;

  header("location:../profile.php?rp=7823");
} else {
  header("location:../profile.php?rp=1298");
}


}

$conn->close();
?>