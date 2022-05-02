

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

$name = $_SESSION['stuname'];
$enrollm = $_SESSION['stenroll'];
$date = date('Y/m/d');

echo'

<h1>User: '.$name.'  <br>Date:'.$date.' </h1>
';
$q = "SELECT * FROM result WHERE roll_number = '$enrollm' ";

$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

echo"
<table>
  <tr>
    <th>Subject</th>
    <th>Marks</th>
    <th>Outof</th>
  </tr>
";

while($row = mysqli_fetch_assoc($result))
{
$sub = $row["subject"];
$m = $row["marks"];
$of = $row["outof"];
        echo"
        <tr>
        <td>$sub</td>
        <td>$m</td>
        <td>$of</td>
        </tr>
        ";
             
    }
    echo"
    </table>   
    ";
?>
<br>
<form name="form1" method="post" action="Studenthome.php">
<input name="submit" type="submit" value="Home">
</body>