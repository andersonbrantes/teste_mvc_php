<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<header>
		<a href="/php_mvc_blog">Home</a>
		<a href="?controller=posts&action=index">Posts</a>
	</header>

	<?php require_once('routes.php'); ?>
	
	<footer>
		<p>Copyright</p>	
	</footer>

</body>
</html>