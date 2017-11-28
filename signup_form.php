<?php

define('TITLE', 'Sign up');
require('signup.php');


//Address error management, if you want.
	ini_set('display_errors',1);//Let me learn from my mistakes!
	error_reporting(E_ALL | E_STRICT);


$host='localhost';
$user='root';
$pass='';
$db='signup';

$con=new mysqli('localhost',$user,$pass,$db)or die("Unable to connect");


print '<style type="text/css" media="screen">.error { color: red; }</style>';

$error="";

if (isset($_POST['submitted']) ) 
{
	
	$problem = FALSE;
	
	if (empty($_POST['first_name'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your first name!</p>';
	}
	
	else if (empty($_POST['last_name'])) {
		$problem = TRUE;
		print '<p class="error">PLease enter your last name!</p>';
	}
	
	else if (empty($_POST['email'])) {
		$problem = TRUE;
		print '<p class="error">PLease enter your email address!</p>';
	}
	
	else if (empty($_POST['username'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your username!</p>';
	}
	
	else if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">PLease enter your password!</p>';
	}
	
	else if ($_POST['password1'] != $_POST['password2']) {
		$problem = TRUE;
		print '<p class="error">Your password did not match your confirmed password!</p>';
	}
	
	else {
		
		
			$firstname=$_POST['first_name'];
			$lastname=$_POST['last_name'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password1'];
	
	
			$query="INSERT INTO sign(firstname,lastname,email,username,password)VALUES
			('$firstname','$lastname','$email','$username','$password')";
			
			if (mysqli_query($con,$query)) {
				
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Welcome!!! You are logged in!!!')
				window.location.href='./main.php'
				</SCRIPT>");
				exit();
			}
			else
			{
				$error="there is an error";
				
			}
		
	}
	
	
		
}

?>

	<center><h1>Sign Up Form</h1></center>
	
	<?php echo $error; ?>

	<form action="signup_form.php" method="post" style="margin-left: 400px"> 
		<p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) ( print htmlspecialchars($_POST['first_name']) ) ?>" /></p>
		<p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) ( print htmlspecialchars($_POST['last_name']) ) ?>" /></p>
		<p>Email Address: <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) ( print htmlspecialchars($_POST['email']) ) ?>" /></p>
		<p>Username: <input type="text" name="username" size="20" value="<?php if (isset($_POST['username'])) ( print htmlspecialchars($_POST['username']) ) ?>" /></p>
		<p>Password: <input type="text" name="password1" size="20" /></p>
		<p>Confirm Password: <input type="text" name="password2" size="20" /></p>
		<p><input type="submit" name="submit" value="Sign Up" style="margin-left: 300px" /></p>
		<input type="hidden" name="submitted" value="true" />
	</form>

	
	
<?php



	
?>