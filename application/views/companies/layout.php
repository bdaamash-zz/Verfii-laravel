<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset('bundles/scaffold/css/bootstrap.css'); ?>">
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span16">
				<h1><?php echo $title; ?></h1>
				<hr>

				<?php if (Session::has('message')): ?>
					<div class="alert-message success">
						<p><?php echo Session::get('message'); ?></p>
					</div>
				<?php endif; ?>

				<?php if($errors->has()): ?>
					<div class="alert-message error">
						<?php  foreach($errors->all('<p>:message</p>') as $error): ?>
							<?php echo $error; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="span16">
				<?php  echo $content; ?>
			</div>
		</div>
	</div>
</body>
</html>
