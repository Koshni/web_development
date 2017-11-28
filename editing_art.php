<?php

	require "art_connect.php";
	$art_id = $_POST['art_id'];

	if(isset($_POST['title']) && isset($_POST['entry']))
	{
		$title = $_POST['title'];
		$entry = nl2br($_POST['entry']);	
	
		$sql = "UPDATE `post` SET `title`='$title',`entry`='$entry' WHERE `art_id`='$art_id'";	

		
		
		if (mysqli_query($conn, $sql)) {
		
			header( "refresh:0; url= info.php" );	
			echo '<script language="javascript">';
			echo 'alert("Update Successful")';
			echo '</script>';
		
		
		
		} else {
			header( "refresh:0; url= art_edit.php" );
			echo '<script language="javascript">';
			echo 'alert("Update Failed,please try again")';
			echo '</script>';
		}

		
		
		
	}


?>