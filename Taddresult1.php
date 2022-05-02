
<html>
<head>
<title> Result </title>
<link rel="stylesheet" href="mystyle.css">
<style>
table, th, td {
  border: 1px solid darksalmon;
  border-collapse: collapse;
  font-size:large;
}
body {
	color: darkred;
	}

</style>
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


#s = Request.Cookies("value")


$b = $_SESSION['username'];

$s = $_SESSION['givetestsub'];

$que = "SELECT question, answer FROM quizquestion WHERE subject = '$s' ";
$result22 = mysqli_query($conn, $que);
$date = date('Y/m/d');

$result = 0;
echo'

<h1>User: '.$b.'  <br>Date:'.$date.' </h1>
<table style="width:100%">
  <tr>
    <th>Questions</th>
    <th>Your answers</th> 
    <th>Right Answers</th>
  </tr>
';
$i=0;
$marks =0;
while($row = mysqli_fetch_assoc($result22))
{
$i = $i + 1;

$qn = $row["question"];
$rr1= "question$i";
$yr= $_POST[$rr1];
$cans = $row["answer"];

if($yr==$cans)
{
    $marks = $marks + 1;
}
echo"
 <tr>
    <td>$qn</td>
    <td>$yr</td>
    <td>$cans</td>
    
  </tr>
";
}

echo'
</table>
<h2> You have got '.$marks.' marks out of '.$i.' in '.$s.' </h2>
<form name="result" method="post" action="Teacherhome.php">
<input name="submit" type="submit" value="Next">
<input type="hidden" name="name" value="'.$b.'">
<input type="hidden" name="subject" value="'.$s.'">
<input type="hidden" name="marks" value="'.$marks.'">
</form>
';



?>
</body>
</html>