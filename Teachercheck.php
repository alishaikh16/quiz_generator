
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

$email = $_POST['email'];
$pass = $_POST['pass'];

$q= "SELECT * FROM teacherlogin WHERE email='$email' && password='$pass'";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num == 1){

    $qn= "SELECT name FROM teacherlogin WHERE email='$email' && password='$pass'";
    if($rname = mysqli_query($conn, $qn)){
        $row = $rname -> fetch_assoc();
        echo $_SESSION['username'] = $row['name'];      
        header('location:Teacherhome.php');
    }
    else{
        echo "erroe occoured";
        die();
    }

}
else{
    header('location:Studentlogin.html');
}

?>