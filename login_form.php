<center><h1>Log In Form</h1></center>

<?php // Script 8.8 - login.php
/* This page lets people log into the site (in theory). */
// Set the page title and include the header file:

	define('TITLE', 'Login');
	require('signup.php');
	
	$dbc=mysqli_connect('localhost','root','');
	mysqli_select_db($dbc,'signup');
	
	if (isset($_POST['submit']) ) {
		
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$username=stripcslashes($username);
		$password=stripcslashes($password);
		$username=mysqli_real_escape_string($dbc,$username);
		$password=mysqli_real_escape_string($dbc,$password);

		$result=mysqli_query($dbc,"select*from sign where username='$username' and password='$password'")
		or die("Failed to query database".mysqli_error($dbc));
		
		$row=mysqli_fetch_array($result);
		
		if ($row['username']==$username&&$row['password']==$password) {
			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Welcome!!! You are logged in!!!')
			window.location.href='./main.php'
			</SCRIPT>");
			exit();
		}
		else { // Forgot a field
			print '<p> The submitted email address and password do not match those on file!<br  />
				Go back and try again.<br /></p> <p>Please make sure you enter both username and password!<br />
			Go back and try again.</p>';
		}
	}
	else { // Display the form.
		print '<form action="login_form.php" method="post" style="margin-left: 400px">
		<p>Username: <input type="text" name="username" size="20" /></p>
		<p>Password: <input type="password" name="password" size="20" /></p>
		<p><input type="submit" name="submit" value="Log In" /></p>
		<input type="hidden" name="submitted" value="true" />
		</form>';
	}
	
	
?>