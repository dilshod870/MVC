<?php


?>
<!doctype html>
<html>
	<head>
		<title>Test Template</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'css/layout.css'; ?>">
	</head>
	<body>
		<div class="container">
			<h1><?php echo $this->get('page'); ?></h1>
			<hr>
			<p>
				<?php echo $this->get('content'); ?>
			</p>
		</div>
	</body>
</html>