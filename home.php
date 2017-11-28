<!DOCTYPE html>
<html>
<head>

	<script src="js/boostrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="home.css" />

	<title> Dogs Home </title>
	

<style>
.slides {display:none;}
</style>

	
</head>
<body>

<?php

session_start( );

unset ($_SESSION);

session_destroy( );

?>

	<body bgcolor="white" />
	<center><img src = "1.png" alt = "words" width = "500" height = "100" style="align:middle" /></center>

	<div class="topnav" id="myTopnav">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="info.php">Articles</a></li>
		<li><a href="sales.php">Sales</a></li>
		<li style="float:right"><a href="signup_form.php">Sign Up</a></li>
		<li style="float:right"><a href="login_form.php">Login</a></li>
		
		</li>
	</ul>
	</div>
	
	<br>
	
	<div class="slideshow" style="max-width:1000px" >
		<img class="slides" src="2.png" width="70%" height="300" style="float: left; margin-right: 10px; margin-bottom: 5px; border: solid black 1px; padding: 2px"  >
		<img class="slides" src="3.jpg" width="70%" height="300" style="float: left; margin-right: 10px; margin-bottom: 5px; border: solid black 1px; padding: 2px">
		<img class="slides" src="4.jpg" width="70%" height="300" style="float: left; margin-right: 10px; margin-bottom: 5px; border: solid black 1px; padding: 2px">
		<img class="slides" src="5.jpg" width="70%" height="300" style="float: left; margin-right: 10px; margin-bottom: 5px; border: solid black 1px; padding: 2px" >
		<img class="slides" src="6.jpg" width="70%" height="300" style="float: left; margin-right: 10px; margin-bottom: 5px; border: solid black 1px; padding: 2px">
	</div>

	<br>

	<script>
	
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("slides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>
	
	
	<center><h1>"WELCOME TO DOGS' HOME!!!"<br>
	</h1></center>
	
	<center><p>
	Want to know about dogs?<br>
	Confuse on how to take care of dogs?<br>
	Want to know how to train dogs?<br>
	Want to know more about dogs' health?<br>
	Thought of adopting/buying dogs?<br>
	Want to sell/give dogs for adoptions?<br>
	You are at the right place!!!
	</p></center>
	
	<br />
	<br />
	<br />
	
	***********************************************************************************************************************************************************************
	
	<br />
	<br />
	<br />
	
	
	<center><img src = "10.jpg" alt = "words" width = "500" height = "100" style="align:right" /></center>
	
	<?php

	$dbc = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($dbc,'articles');

	$query = 'SELECT * FROM post ORDER BY date_entered DESC';

	if ($r = mysqli_query($dbc, $query)) {
	
		while ($row = mysqli_fetch_array($r)) {
			print "<p><h3>{$row['title']}</h3>{$row['entry']}<br />
			</p><hr />\n";
		
		}
	}
	else {
		print '<p style="color:red;">Could not retrieve the data because:<br />' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

	mysqli_close($dbc);
	?>

	<br />
	<br />
	
	***********************************************************************************************************************************************************************
	
	<br />
	<br />
	
	
	<center><img src = "sales-banners.png" alt = "words" width = "400" height = "150" style="align:right" /></center>
	
	<br />
	<br />
	
	<?php

	$dbc = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($dbc,'sales');

	$query = 'SELECT * FROM sell ORDER BY date DESC';

	if ($r = mysqli_query($dbc, $query)) {
	
		while ($row = mysqli_fetch_array($r)) {
			print "<p><h3>{$row['sales_title']}</h3>{$row['descrip']}<br />{$row['contact_num']}<br />{$row['date']}<br />
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



