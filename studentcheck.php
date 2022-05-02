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

$q= "SELECT * FROM studentlogin WHERE email='$email' && password='$pass'";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num == 1){

    $qn= "SELECT name FROM studentlogin WHERE email='$email' && password='$pass'";
    if($rname = mysqli_query($conn, $qn)){
        $row = $rname -> fetch_assoc();
        echo $_SESSION['stuname'] = $row['name'];
        $qn1= "SELECT enrollmentNo FROM studentlogin WHERE email='$email' && password='$pass'";
        if($r1name = mysqli_query($conn, $qn1)){
            $row1 = $r1name -> fetch_assoc();
            $_SESSION['stenroll'] = $row1['enrollmentNo'];      
        }      
        header('location:Studenthome.php');
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