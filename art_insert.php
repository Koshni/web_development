
<?php

	define('TITLE', 'Info');
	require('signup.php');
	require "art_connect.php";

	if (isset($_POST['submitted'])) {
	
	$dbc = mysqli_connect('localhost','root', '');
	mysqli_select_db($dbc,'articles');
	
	$problem = FALSE;
	
	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
		$title = trim($_POST['title']);
		$entry = nl2br(trim($_POST['entry']));
	} 
	else {
		print '<p style="color:red;">Please submit both a title and an entry.</p>';
		$problem = TRUE;
	}


	if (!$problem) {
	
		$query = "INSERT INTO post(title, entry, date_entered) VALUES ('$title', '$entry', NOW( ))";
	
		if (@mysqli_query($dbc,$query)) {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Thank you for adding your article!!!')
			window.location.href='./info.php'
			</SCRIPT>");
		
		}
		else {
			print '<p style="color:red;">Could not add the entry because:<br />' . mysqli_error($dbc). '.</p><p>The query was: ' . $query . '</p>'; 
		}

	}
	
mysqli_close($dbc);
}

?>

<center><img src = "11.jpg" alt = "words" width = "500" height = "100" style="align:middle" /></center>
<br />
<br />

<form action="art_insert.php" method="post" style="margin-left: 350px">
	<p>Article Title: <input type="text" name="title" size="40" maxsize="100"/></p>
	<p><label>Article: </label><textarea name="entry" cols="100" rows="50" ></textarea></p>
	<input type="submit" name="submit" value="Post Article!" />
	<input type="hidden" name="submitted" value="true" />
</form>


</body>
</html>
