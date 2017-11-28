
<?php

define('TITLE', 'Info');
require('signup.php');
require('sales_connect.php');

	if (isset($_POST['submitted'])) {
	
	$dbc = mysqli_connect('localhost','root', '');
	mysqli_select_db($dbc,'sales');
	
	$problem = FALSE;
	
	if (!empty($_POST['sales_title']) && !empty($_POST['descrip'])  && !empty($_POST['contact_num'])) {
		$sales_title = trim($_POST['sales_title']);
		$descrip = nl2br(trim($_POST['descrip']));
		$contact_num = nl2br(trim($_POST['contact_num']));
		
	} 
	else {
		print '<p style="color:red;">Please submit all the details.</p>';
		$problem = TRUE;
	}


	if (!$problem) {
	
		$query = "INSERT INTO sell(sales_title, descrip, contact_num, date) VALUES ('$sales_title', '$descrip', '$contact_num', NOW( ))";
	
		if (@mysqli_query($dbc,$query)) {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Thank you for adding your sales!!!')
			window.location.href='./sales.php'
			</SCRIPT>");
		}
		else {
			print '<p style="color:red;">Could not add the entry because:<br />' . mysqli_error($dbc). '.</p><p>The query was: ' . $query . '</p>'; 
		}

	}
	
mysqli_close($dbc);
}

?>

<center><img src = "salebanner.jpg" alt = "words" width = "500" height = "100" style="align:middle" /></center>
<br />
<br />

<form action="sales_insert.php" method="post" style="margin-left: 350px">
	<p>Title: <input type="text" name="sales_title" size="40" maxsize="100"/></p>
	<p><label>Description: </label><textarea name="descrip" cols="80" rows="30"></textarea></p>
	<p>Contact Number: <input type="text" name="contact_num" size="40" /></p>
	<input type="submit" name="submit" value="Post!" />
	<input type="hidden" name="submitted" value="true" />
</form>


</body>
</html>
