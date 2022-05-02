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
#$res= mysqli_query($conn," SELECT * from exam_category where ID = $id" );
#while($row = mysqli_fetch_array($res)){
#    $exam_category=$row["subject"];
#}
?>

<?php



#    $loop=0;
 #   $count=0;
  #  $res=mysqli_query($conn,"SELECT * FROM quizquestion WHERE subject='$exam_category' order by ID asc") or die(mysqli_error($conn));
   # $count=mysqli_num_rows($res);
    
$x = $_SESSION["sub"];
    
$e = $_SESSION["qty"];
for ($i = 1; $i <= $e; $i=$i+1)
{
    $ques = 'question'.$i.'';
    $answer = 'answer'.$i.'';
    $option1 = 'option'.$i.'_1';
    $option2 = 'option'.$i.'_2';
    $option3 = 'option'.$i.'_3';

    $req ="INSERT INTO quizquestion (ID, question, answer, opt1, opt2, opt3, subject, q_number) VALUES (NULL, '$_POST[$ques]', '$_POST[$answer]', '$_POST[$option1]', '$_POST[$option2]', '$_POST[$option3]', '$x','$i')";
    mysqli_query($conn,$req);

}

header('location:Teacherhome.php');

mysqli_close($conn);

?>