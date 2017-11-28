<?php

$dbc = mysqli_connect('localhost', 'root', '');
mysqli_select_db($dbc,'articles');

if (isset($_GET['art_id']) && is_numeric($_GET['art_id']) ) {
	
	$query ="SELECT title, entry FROM post WHERE art_id={$_GET['art_id']}";
	
	if ($r = mysqli_query($dbc,$query)) {
		$row = mysqli_fetch_array($r);
		
		print '<form action="art_delete.php" method="post">
		<p>Are you sure you want to delete this entry?</p>
		<p><h3>' . $row['title'] . '</h3>' . $row['entry'] . '<br />
		<input type="hidden" name="art_id" value="' .$_GET['art_id'] . '"/>
		<input type="submit" name="submit" value="Delete this Entry!" /></p>
		</form>';
	}
	else {
		
		print '<p style="color:red;">Could not retrieve the blog entry because:<br />' . mysqli_error();
	}
}

elseif (isset($_POST['art_id']) && is_numeric($_POST['art_id'])) {
	
	$query = "Delete FROM post WHERE art_id={$_POST['art_id']} LIMIT 1";
	$r = mysqli_query($dbc, $query);
	
	if (mysqli_affected_rows($dbc) == 1) {
		print '<p>The article has been deleted.</p>';
		header ('Location: info.php');
	
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