<?php
	header('HTTP/1.1 404 Not Found');

	$title = 'Error 404';
	$content_title = 'Page Not Found';
	$content = DIR_ROOT . "views/404.tpl.php";
?>