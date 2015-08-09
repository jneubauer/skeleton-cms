
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../css/normalize.css">
		<link rel="stylesheet" href="../../css/skeleton.css">
		<link rel="stylesheet" href="../../css/theme.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>new-page</title>
	</head>
	<body>
		<div class="container">
			<div class="row twelve columns">
				<h1>new page</h1>
				<hr />
			</div>
			
			<nav>
				<?php include "../../navigation.php" ; ?>
			</nav>
			<div id="module-container" class="row twelve columns">
				<?php
				foreach (glob("../../modules/new-page/*.html") as $filename)
				{
				    include $filename;
				}
				?>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/module.js">
	</body>
	</html>
	