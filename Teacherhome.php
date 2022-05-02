
<?php
session_start();
/*
$b = $_REQUEST['name']
setcookie($b, time() + (86400 * 30), "/");
*/
?>

<html>
<head>
<title> HOME PAGE </title>

<link rel='stylesheet' href='mystyle.css'>
<style>
.logoutLblPos{

   position:fixed;
   right:10px;
   top:5px;
}
h1{font-size:36px;}
</style>
</head>
</html>
<body>

<h1> Welcome to online quiz generator </h1>
<form name='quizfrom' method='post' action='takesubject.php'>
<input name='submit' type='submit' value='Create Quiz'>
<input type='hidden' name='name' value='<?php echo $_SESSION['username'];?>'>
</form>
<h1> All Quizzes </h1>
<form name='quizfrom' method='post' action='Tquizs.php'>
<input name='submit' type='submit' value='ShowQuizes'>
<input type='hidden' name='name' value='<?php echo $_SESSION['username'];?>'>
</form>
<h1> Results </h1>
<form name='quizfrom' method='post' action='Result.php'>
<input name='submit' type='submit' value='Check Result'>
<input type='hidden' name='name' value='<?php echo $_SESSION['username'];?>'>
</form>
<form align='right' name='form1' method='post' action='message.php'>
  
  <label class='logoutLblPos'>
  <h2><?php
  if(isset($_SESSION['username']))
{
      echo "<br>Name: " . $_SESSION['username'] .""; 
}
    ?> </h2>
  <input name='submit2' type='submit' id='submit2' value='Log Out'>
  </label>
</form>
</body>
