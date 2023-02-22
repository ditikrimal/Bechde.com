
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$message='Something';

$connect=mysqli_connect('localhost','root','','bechdedatabase') or die("Connection Failed");
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * from signupdatabasebd where email='$email' && password='$password'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if ( $count>0) {
    header('Location:LoggedHome.html');
    session_start();
    $_SESSION['bechdedatabase']='true';
}else{
    
    $message = 'Email or Password did not match.';

    echo "<SCRIPT>alert('$message')
    window.location.replace('Login.html');
    </SCRIPT>";
    mysql_close();
}
   ?>
