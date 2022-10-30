<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

session_start();
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'mail');

// get the post records
if(isset($_POST['register_user'])){
    $to = mysqli_real_escape_string($con, $_POST['to']);
    $from = mysqli_real_escape_string($con, $_POST['from']);
    $sub = mysqli_real_escape_string($con, $_POST['sub']);
    $text = mysqli_real_escape_string($con, $_POST['text']);
    $html = mysqli_real_escape_string($con, $_POST['html']);
}

//$con = new mysqli('localhost', 'root', '','mail');
// database insert SQL code
// insert in database 
$stmt=$con->prepare("insert into text(to,from,sub,text,html) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$to,$from,$sub,$text,$html);
$stmt->execute();
echo"Registered";
$stmt->close();
$con->close();
?>