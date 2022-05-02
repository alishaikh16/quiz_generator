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

#$exam_category ='';
#$res= mysqli_query($conn,"select * from exam_category where ID=$id" );


?>
<html>
<head>

<link rel="stylesheet" href="mystyle.css">
<style>
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */

input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: white;
  color:darkred;
}

/* Add a background color and some padding around the form */
.container {
align:center
  width: 50%;
  border-radius: 4px;
  background-color: bisque;
  padding: 15px;
}

body{
background-color:white;
background-image:url("perlbg1.jpg");
background-size: contain;

}


</style>
<title> Quiz Questions </title>
</head>
<body>
<h4 style="color:darkred;">
<?php
/*$b = $_GET['name']*/
    
?>

To upload image please upload your image <a href="https://imgur.com/upload">https://imgur.com/upload</a>
<br>And paste the image address in the form 

<div class="container">
<form name="quizform" method="post" action="addquestion.php">



<?php
if(!isset($_SESSION["qty"])){
  
echo"how";
#echo $_SESSION["qty"];
}

$e = $_SESSION["qty"];
for ($i = 1; $i <= $e; $i+=1)
{
    echo'

    <label for="fname"><h3>Question  '. $i .'</h3></label>
    <input type="text"  name="question'.$i.'" placeholder ="Question '. $i .'" autocomplete="off" required >
	
	<label ><h4>Image Link(Optional)</h4></label>
    <input type="text"    name="Questionimage '. $i .'" placeholder="Link">

  
	<div style="float:left;">
    <label ><h4>Correct Answer</h4></label>
    <input type="text"    name="answer'.$i.'" placeholder="Answer" autocomplete="off"required size="70" size="70">
    </div>

    <div style="float:right;">
    <label ><h4>Image Link(Optional)</h4></label>
    <input type="text"    name="image '. $i .'.1" placeholder="Link">
    </div><br><br><br><br><br>
	
	
	<div style="float:left;">
    <label ><h4>Option 1</h4></label>
    <input type="text"    name="option'.$i.'_1" placeholder="Option1" autocomplete="off"required size="70" size="70">  
    </div>

    <div style="float:right;">
    <label ><h4>Image Link(Optional)</h4></label>
    <input type="text"    name="image '. $i .'.2" placeholder="Link">
    </div><br><br><br><br>
	
	<div style="float:left;">
    <label ><h4>Option 2</h4></label>
    <input type="text"    name="option'.$i.'_2" placeholder="Option2" autocomplete="off"required size="70" size="70">  
    </div>

    <div style="float:right;">
    <label ><h4>Image Link(Optional)</h4></label>
    <input type="text"    name="image '. $i .'.3" placeholder="Link">
    </div><br><br><br><br>
	
	<div style="float:left;">
    <label ><h4>Option 3</h4></label>
    <input type="text"    name="option'.$i.'_3" placeholder="Option3" autocomplete="off"required size="70" size="70">
    </div>

    <div style="float:right;">
    <label ><h4>Image Link(Optional)</h4></label>
    <input type="text"    name="image '. $i .'.4" placeholder="Link">
    </div><br><br><br><br>
	<hr>
	';
}
#  echo'
#  <input type="hidden" name="name" value=' $b '>
#  <input type="hidden" name="number" value=' $e'>
#  ';
echo'
<input type="submit" name="submit1" value="Submit" >
';

	?>

  </form>
</div>




</body>
</html>