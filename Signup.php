<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$dbname ="bechdedatabase";
 $conn = mysqli_connect('localhost', 'root','',  'bechdedatabase' ) or die("Cannot Connect Database".$connection->error);
session_start();
$fullName= $_POST['fullName'];
$email= $_POST['email'];
$password= $_POST['password'];
$confirmPassword= $_POST['conPassword'];
$phoneNumber= $_POST['contactNum'];
$address= $_POST['address'];

 	 			$sql = "INSERT INTO signupdatabasebd (fullName, email, password, confirmPassword, phoneNumber, address) 
				  VALUES ( '$fullName', '$email', '$password', '$confirmPassword', $phoneNumber, '$address') ";

  				$result= mysqli_query($conn, $sql);
				  $query="SELECT * from signupdatabasebd where email='$email'";
				  $duplicate=mysqli_query($conn,$query);
				  if($query=$email){
					echo '<script>alert("The Entered Email is Already Associated with an Account. Please Try Different Email")</script>';

				  }

  if ($result>0) {
	header('Location:CreateSuccess.Html');
  } else {
}
 
?>


<html>
  <head>
    <title>Register to Bechde</title>
    <link rel="icon" href="Images/BechdeIcon.ico" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
    />
    <link rel="stylesheet" href="CSS/RegistrationStyle.css" />
    <script src="ScriptCodes.js"></script>
    <div class="center">
      <div class="backHome">
        <a href="Home.html">Go to Home</a>
      </div>
      <a style="text-decoration: none" href="Home.html"><h1>Bechde</h1></a>
      <h3>Register Your Account</h3>
      <form action="Signup.php" method="post" onsubmit="">
        <div class="formItems1">
          <div class="inputbox">
            <input type="text" required="required" name="fullName" />
            <span>Full Name</span>
          </div>
          <div class="inputbox">
            <input type="text" required="required" name="email" />
            <span>Email</span>
          </div>
        </div>
        <div class="formItems2">
          <div class="inputbox">
            <input
              type="password"
              name="password"
              required="required"
              id="id_password"
              onkeyup="passValidation();"
            />
            <span>Password</span>
          </div>
          <div class="inputbox">
            <input
              type="password"
              name="conPassword"
              required="required"
              id="id_conPassword"
              onkeyup="passValidation();"
            />
            <span>Confirm Password</span>
          </div>
        </div>
        <div class="formItems3">
          <div class="inputbox">
            <input type="number" required="required" name="contactNum" />
            <span>Contact</span>
          </div>
          <div class="inputbox">
            <input type="text" required="required" name="address" />
            <span>Address</span>
          </div>
        </div>
        <span id="validationSpan"></span>

        <div class="regButtonDiv">
          <input
            onclick="passValidationAlert();"
            class="regButton"
            type="submit"
            value="Sign Up"
          />
        </div>
      </form>
      <div class="buttomLogin">
        <h3 style="text-align: right">
          Already Have an Account ?
          <a class="buttomLogin" href="Login.html">Login here</a>
        </h3>
      </div>
    </div>
  </head>
</html>
