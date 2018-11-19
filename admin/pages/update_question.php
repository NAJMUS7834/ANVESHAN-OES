<?php
include '../../database/config.php';
include '../../includes/uniques.php';
$question_id = $_POST['question_id'];
$question = mysqli_real_escape_string($conn, $_POST['question']);
$answer = mysqli_real_escape_string($conn, $_POST['answer']);

if (isset($_GET['type'])) {
$question_type = $_GET['type'];	
if ($question_type == "mc") {	
$opt1 = mysqli_real_escape_string($conn, $_POST['opt1']);
$opt2 = mysqli_real_escape_string($conn, $_POST['opt2']);
$opt3 = mysqli_real_escape_string($conn, $_POST['opt3']);
$opt4 = mysqli_real_escape_string($conn, $_POST['opt4']);


$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question' AND question_id != '$question_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
 header("location:../edit-question.php?rp=1185&id=$question_id");
    }
} else {

$sql = "UPDATE tbl_questions SET question='$question', option1='$opt1', option2='$opt2', option3='$opt3', option4='$opt4', answer='$answer' WHERE question_id='$question_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../edit-question.php?rp=7823&id=$question_id");	
} else {
 header("location:../edit-question.php?rp=1298&id=$question_id");	
}

}


}else if($question_type == "fib") {

$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question' AND question_id != '$question_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
 header("location:../edit-question.php?rp=1185&id=$question_id");
    }
} else {

$sql = "UPDATE tbl_questions SET question='$question', answer='$answer' WHERE question_id='$question_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../edit-question.php?rp=7823&id=$question_id");	
} else {
 header("location:../edit-question.php?rp=1298&id=$question_id");	
}


}


}else{
	
}
	
}else{
	

	
}


?>