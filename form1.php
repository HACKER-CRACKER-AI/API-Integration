<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Enter</h3> 
    
    <form method="post">
        to:<br>
        <input type="text" name="to">
        <br>
        from:<br>
        <input type="text" name="from">
        <br><br>
        sub:<br>
        <input type="text" name="sub">
        <br>
        text:<br>
        <input type="text" name="text">
        <br>
        html:<br>
        <input type="text" name="html">
        <br>
        <input type="submit" value="Submit" name="register_user">
      </form>
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
</body>

</html>