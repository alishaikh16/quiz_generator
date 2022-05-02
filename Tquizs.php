
<head>

<link rel="stylesheet" href="mystyle.css">
<title> Quizzes </title>
</head>
<body>
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

echo '<h1> Subjects:</h1>';

$q= "SELECT subject FROM exam_category ";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

 


while($row = mysqli_fetch_assoc($result))
{
        $ss2 = $row["subject"];
        echo'
        <form name="quizfrom" method="post" action="Tquiz1.php">
        <input name="value" type="submit" value="'.$ss2.'">
        </form>
        ';
             
    }
    

?>
</body>
</html