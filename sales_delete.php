<?php

$dbc = mysqli_connect('localhost', 'root', '');
mysqli_select_db($dbc,'sales');

if (isset($_GET['id']) && is_numeric($_GET['id']) ) {
	
	$query ="SELECT sales_title, descrip, contact_num FROM sell WHERE id={$_GET['id']}";
	
	if ($r = mysqli_query($dbc,$query)) {
		$row = mysqli_fetch_array($r);
		
		print '<form action="sales_delete.php" method="post">
		<p>Are you sure you want to delete this entry?</p>
		<p><h3>' . $row['sales_title'] . '</h3>' . $row['descrip'] . '<br />'. $row['contact_num'] .'<br />
		<input type="hidden" name="id" value="' .$_GET['id'] . '"/>
		<input type="submit" name="submit" value="Delete this Entry!" /></p>
		</form>';
	}
	else {
		
		print '<p style="color:red;">Could not retrieve the blog entry because:<br />' . mysqli_error();
	}
}

elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
	
	$query = "Delete FROM sell WHERE id={$_POST['id']} LIMIT 1";
	$r = mysqli_query($dbc, $query);
	
	if (mysqli_affected_rows($dbc) == 1) {
		print '<p>The sale has been deleted.</p>';
		header ('Location: sales.php');
	
	}
	else{
		print '<p style="color: red;">Could not delete the blog entry because:<br />';
	}
}

else {
	print '<p style="color: red;">This page has been accessed in error.</p>';
}

mysqli_close($dbc);
?>