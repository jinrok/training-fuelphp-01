<!DOCTYPE html>
<head>
	<title>ほぼ日</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo Asset::js("bootstrap.min.js"); ?>
	<?php echo Asset::css("bootstrap.min.css"); ?>

	<?php echo Asset::css("hoboniti/hoboniti.css"); ?>
</head>
<body>
	<div class="container">
		<?php echo $menu_top ?>
		<?php echo $content ?>
	</div>
</body>