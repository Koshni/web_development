<html>
<body>

	<center><img src = "sale-banner.jpg" alt = "words" width = "500" height = "100" style="align:middle" /></center>
	<br />
	<br />
	<div id="container" style="width:100%;">                                   
	  <center><div id="left" style="float:left; width:50%;"><a href="sales_insert.php">Upload Your Own Sale!</a></div><center>                     
	  <div id="right" style="float:right; width:50%;"><a href="main.php">Home!</a></div>                   
	</div>    
	<br />
	<br />

	
	<?php

	$dbc = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($dbc,'sales');

	$query = 'SELECT * FROM sell ORDER BY date DESC';

	if ($r = mysqli_query($dbc, $query)) {
		
		while ($row = mysqli_fetch_array($r)) {
			print "<p><h3>{$row['sales_title']}</h3>{$row['descrip']}<br />{$row['contact_num']}<br />{$row['date']}<br />
			<a href=\"sales_edit.php?id={$row['id']}\">Edit</a>
			<a href=\"sales_delete.php?id={$row['id']}\">Delete</a>
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