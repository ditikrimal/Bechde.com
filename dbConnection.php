<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$dbname ="bechdedatabase";
 $conn = mysqli_connect('localhost', 'root','',  'bechdedatabase' ) or die("Cannot Connect Database".$connection->error);
session_start();
$fullName= $_POST['fullName'];
$email= $_POST['email'];
$password= $_POST['password'];
$confirmPassword= $_POST['confirmPassword'];
$phoneNumber= $_POST['contactNum'];
$address= $_POST['address'];

 	 			$sql = "INSERT INTO signupdatabasebd (fullName, email, password, confirmPassword, phoneNumber, address) 
				  VALUES ( '$fullName', '$email', '$password', '$confirmPassword', $phoneNumber, '$address') ";

  				$result= mysqli_query($conn, $sql);
				  $query="SELECT * from signupdatabasebd where email='$email'";
				  $duplicate=mysqli_query($conn,$query);
				  if($query=$email){
					header('Location:Signup.html');
					echo '<script>alert("The entered email is already associated with an account.")</script>';

				  }

  if ($result>0) {
	header('Location:CreateSuccess.Html');
  } else {
}
 
?>
