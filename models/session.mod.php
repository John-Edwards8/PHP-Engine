<?php	
	session_start();
	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";

	if (empty($_SESSION['auth'])) {
		$_GET['c'] = 'auth';
	}

	setcookie("page", $_SERVER['REQUEST_URI'], time()+7*3600*24);
?>