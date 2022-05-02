
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<style>
fieldset{width:auto;}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

        .zoom {
  padding: 5px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.7); /* IE 9 */
  -webkit-transform: scale(1.7); /* Safari 3-8 */
  transform: scale(1.7); 
}

body {
	background-size:contain;
	
	}

</style>
<title> Test </title>
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

$s = $_SESSION['givetestsub'];

# prepare SQL statement
$que = "SELECT question, answer, opt1, opt2, opt3, subject FROM quizquestion WHERE subject = '$s' ";
$result = mysqli_query($conn, $que);

$count = 1;

echo'
<br><br><br>
<form name="regform" method="post" action="Taddresult1.php">
<fieldset> 
';

while($row = mysqli_fetch_assoc($result))
{
	
echo'
<h6>
<label>Question '.$count.' : '.$row["question"].' <br></label><br>
';
$option1 = $row["answer"];

echo'
<div class="row">
<div class="column">
<input type="radio"   name="question'.$count.'" value="'.$option1.'" required>
<label for="option1">'.$option1.'<br></label><br>
';

echo'
</div>
';
$option2 = $row["opt1"];

echo'
<div class="column">
<input type="radio"   name="question'.$count.'" value="'.$option2.'" >
<label for="option2">'.$option2.' <br></label><br>
';

echo'
</div>
</div>
';
$option3 = $row["opt2"];


echo'
<div class="row">
<div class="column">
<input type="radio"   name="question'.$count.'" value="'.$option3.'" >
<label for="option3">'.$option3.' <br></label><br>
';

echo'
</div>
';
$option4 = $row["opt3"];

echo'
<div class="column">
<input type="radio"   name="question'.$count.'" value="'.$option4.'" >
<label for="option4">'.$option4.' <br></label><br>
';

echo'
</div>
</div>

<hr>
';
$count = $count + 1;
}

echo'
<input type="hidden" name="name" value="$b">
<input type="hidden" name="value" value="$s">
<input type="submit" name="submit" value="Submit" style="width: 180px; height : 50px;">
</fieldset>
</form>
';

?>
