<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
</head>
<body>
	<div>
		<p>
			<a href="<?= SITE_DIR; ?>?c=auth">Log in</a>	|
			<a href="<?= SITE_DIR; ?>?c=calc">Calculator</a>
		</p>
	</div>
	<h1><?= $content_title; ?></h1>
	<?php include_once($content); ?>
</body>
</html>