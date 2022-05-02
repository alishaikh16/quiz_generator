
<?php
session_start();

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
background-size: cover;

}


</style>
<title> Quiz Subject </title>
</head>
<body>
<h4 style="color:darkred;">
<?php
/*$b = $_GET['name']*/
    
?>

<br>
<br>
<br>
<div class="container">
<form name="quizform" method="post" action="subjectgodb.php" >

<label for="quantity">Please Enter Number Of questions:</label>
<input type="text" id="quantity" name="quantity" required><br>

<label for="fname"><h1>Quiz- Please enter the name of Subject</h1></label>

<input type="text"  name="subject" placeholder="Subject" required>  

<input type="submit" name="submit1" value="Submit" >
  </form>
</div>



</body>
</html>
