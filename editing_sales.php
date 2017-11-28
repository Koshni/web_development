<?php

	require "sales_connect.php";
	$id = $_POST['id'];

	if(isset($_POST['sales_title']) && isset($_POST['descrip']) && isset($_POST['contact_num']))
	{
		$sales_title = $_POST['sales_title'];
		$descrip = nl2br($_POST['descrip']);
		$contact_num = $_POST['contact_num'];
	
		$sql = "UPDATE `sell` SET `sales_title`='$sales_title',`descrip`='$descrip', `contact_num`='$contact_num'  WHERE `id`='$id'";	

		
		
		if (mysqli_query($conn, $sql)) {
		
			header( "refresh:0; url= sales.php" );	
			echo '<script language="javascript">';
			echo 'alert("Update Successful")';
			echo '</script>';
		
		
		
		} else {
			header( "refresh:0; url= art_sales.php" );
			echo '<script language="javascript">';
			echo 'alert("Update Failed,please try again")';
			echo '</script>';
		}

		
		
		
	}


?>