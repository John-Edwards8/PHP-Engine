<?php
	include_once(DIR_ROOT . "models/calc.mod.php");

	try {
		obs_operation();
	} catch (Exception $e) {
		$error = $e->getMessage();
		$res = "";
	}

	$title = 'Calculator';
	$content_title = 'Calculator';
	$content = DIR_ROOT . "views/calc.tpl.php";
?>