<html>
<head>

<link rel="stylesheet" href="mystyle.css">
<title> Check result </title>
</head>
<body align="center">
<?php
session_start();

?>
<form  method="post" action="allresult.php">
<br><br>
<h3>
<label for="name">Enrollment No:</label>
<br>
<input type="text" name="sno" required style="width:15%"><br><br>
<input type="submit" value="Show Result">
<input type="hidden" name="name" value="<?php echo $_SESSION['username'];?>">

</h3>
</form>

<form name="form1" method="post" action="Teacherhome.php">
<input name="submit" type="submit" value="Home">
</form>
</html>