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
$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$enroll = $_POST['enroll'];

$q= "SELECT * FROM studentlogin WHERE email='$email' AND enrollmentNo='$enroll'";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:Studentsignup.html');
}
else{

    $q1="INSERT INTO studentlogin(name, enrollmentNo, email, password) VALUES ('$name','$enroll','$email','$pass')";
    mysqli_query($conn, $q1);
    header('location:Studentlogin.html');
}

?>