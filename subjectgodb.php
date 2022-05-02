<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_gen";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, $dbname);

$_SESSION["sub"] = $_POST["subject"];
$_SESSION["qty"] = $_POST["quantity"];
$subject = $_POST['subject'];
$qty = $_POST['quantity'];

$q="SELECT * FROM exam_category WHERE subject='$subject'";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1>duplicate</h1>";
    header('location:takessubject.php');
}
else{
    $q1="INSERT INTO exam_category (subject, quantity) VALUES ('$subject','$qty')";
    mysqli_query($conn, $q1);
    header('location:quizquestion1.php');
}


?>