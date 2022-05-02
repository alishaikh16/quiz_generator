
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

$q= "SELECT * FROM teacherlogin WHERE email='$email'";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1>duplicate</h1>";
    header('location:Teachersignup.html');
}
else{

    $q1="INSERT INTO teacherlogin(password, name, email) VALUES ('$pass','$name','$email')";
    mysqli_query($conn, $q1);
    header('location:Teacherlogin.html');
}


mysqli_close($conn);


?>