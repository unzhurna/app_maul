<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KANIM KLAS II CIREBON</title>
	<meta name="description" content="">
	<meta name="author" content="unzhurna">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sangoma.css">
</head>
	<body class="login">
		<section class="container" role="main">
			<?php echo $alert; ?>
			<div class="login-logo"><?php echo anchor('', 'KANIM KLAS II CIREBON'); ?></div>
			<?php echo form_open('auth/login'); ?>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="elusive icon-user"></span></span>
						<input class="form-control" type="text" placeholder="Username" name="username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="elusive icon-key"></span></span>
						<input class="form-control" type="password" placeholder="Password" name="password">
					</div>
				</div>
				<button class="btn btn-primary btn-block" type="submit">Login</button>
			<?php echo form_close(); ?>
		</section>
	</body>
</html>
