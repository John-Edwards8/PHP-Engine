<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$slogin = "admin";
		$spass = "123456";
		
		if (!empty($_POST['login'])) 
			$login = $_POST['login'];
		else $login = "";

		if (!empty($_POST['pass'])) 
			$pass = $_POST['pass'];
		else $pass = "";

		if (!empty($_POST['rem'])) 
			$rem = true;
		else $rem = false;

		if (($slogin == $login) && ($spass == $pass)){
			$_SESSION['auth']="on";
			if ($rem == true) {
				setcookie("rem", "true", time()+7*3600*24);
			}
			header("location: " . SITE_DIR . "index.php?c=calc");
			exit();
		} else $mess = "Login or password isn\'t correct!";

	} else {
		if (!empty($_SESSION['auth'])) {
			if (!empty($_COOKIE['page'])) 
				header("location: " . $_COOKIE['page']);
			else
				header("location: index.php");
			exit();
		}
		if (!empty($_COOKIE['rem'])) {
			$_SESSION['auth']="on";
			if (!empty($_COOKIE['page'])) 
				header("location: " . $_COOKIE['page']);
			else
				header("location: index.php");
			exit();
		}
	}

?>