<html>
<body>

	<center><img src = "8.jpg" alt = "words" width = "500" height = "100" style="align:middle" /></center>
	<br />
	<br />
	<div id="container" style="width:100%;">                                   
	  <center><div id="left" style="float:left; width:50%;"><a href="art_insert.php">Upload Your Own Articles!</a></div><center>                     
	  <div id="right" style="float:right; width:50%;"><a href="main.php">Home!</a></div>                   
	</div> 
	<br />
	<br />

<?php

$dbc = mysqli_connect('localhost', 'root', '');
mysqli_select_db($dbc,'articles');

$query = 'SELECT * FROM post ORDER BY date_entered DESC';

if ($r = mysqli_query($dbc, $query)) {
	
	while ($row = mysqli_fetch_array($r)) {
		print "<p><h3>{$row['title']}</h3>{$row['entry']}
		<br \>
		<a href=\"art_edit.php?art_id={$row['art_id']}\">Edit</a>
		<a href=\"art_delete.php?art_id={$row['art_id']}\">Delete</a>
		</p><hr />\n";
		
	}
}
else {
	print '<p style="color:red;">Could not retrieve the data because:<br />' . mysqli_error($dbc) . '.</p><p>Thequery being run was: ' . $query . '</p>';
}

mysqli_close($dbc);
?>

</body>
</html>