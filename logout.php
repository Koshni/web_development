<?php

session_start( );

unset ($_SESSION);

session_destroy( );

	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Thank you for visiting!!! You are logged out!!! Please visit again!!!')
			window.location.href='./home.php'
			</SCRIPT>");
			exit();
?>