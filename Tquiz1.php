
<?php
session_start();
$s = $_POST['value'];
$_SESSION['givetestsub'] = $s;
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Test </title>
<style>
body{font-size:22px}</style>
</head>
<body align="center">

<h2><?php echo "<br><br>This quiz will contain questions about " .$s.""; ?><h2>
<form name="quizfrom" method="post" action="Ttest.php">
<input name="submit" type="submit" value="Give Test">
<input type="hidden" name="value" value="<?php echo $s; ?>">
<input type="hidden" name="name" value="<?php echo $s; ?>">
</form>
<form name="form1" method="post" action="Teacherhome.php">
<input name="submit" type="submit" value="Home">
<input type="hidden" name="name" value="<?php echo $s; ?>">
</form>
<form name="form2" method="post" action="Tquizs.php">
<input name="submit" type="submit" value="Back">
<input type="hidden" name="name" value="<?php echo $s; ?>">
</form>
</body>
</html>

