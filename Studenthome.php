<?php
session_start();
?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" href="mystyle.css">
<style>
.logoutLblPos{

   position:fixed;
   right:10px;
   top:20px;
}
body{
font-size:22px;}
</style>
</head>
<body>


<h1> All Quizzes </h1>
<form name='quizfrom' method='post' action='quizs.php'>
<input name='submit' type='submit' value='ShowQuizes'>
<input type='hidden' name='name' value='<?php echo $_SESSION['stuname'];?>'>
<input type='hidden' name='enroll' value='<?php echo $_SESSION['stenroll'];?>'>
</form>
<h1> Results </h1>
<form name='quizfrom' method='post' action='ownresult.php'>
<input name='submit' type='submit' value='Check Result'>
<input type='hidden' name='name' value='<?php echo $_SESSION['stuname'];?>'>
<input type='hidden' name='enroll' value='<?php echo $_SESSION['stenroll'];?>'>

</form>
<form align='right' name='form1' method='post' action='message.php'>
  
  <label class='logoutLblPos'>
  <h2><?php
  if(isset($_SESSION['stuname']))
{
      echo "<br>Name: " . $_SESSION['stuname'] .""; 
}
    ?> </h2>
  <input name='submit2' type='submit' id='submit2' value='Log Out'>
  </label>
</form>
</body>
