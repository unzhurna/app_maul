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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.css">
	<!-- IE8 support of media queries and CSS 2/3 selectors -->
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/selectivizr.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<header id="header" class="container">
			<h1><a href="#">KANIM II CIREBON</a></h1>
			<div class="user-profile">
				<figure>
					<figcaption>
						<strong><?php echo anchor('auth/profile', $this->session->userdata('nama')); ?></strong>
						<ul>
							<li><?php echo anchor('auth/logout', 'Logout', 'title="Logout"'); ?></li>
						</ul>
					</figcaption>
				</figure>
			</div>
			<nav class="main-navigation navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation-collapse">
						<span class="elusive icon-th-list"></span> Menu
					</button>
				</div>
				<div class="main-navigation-collapse collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><?php echo anchor('', '<span class="elusive icon-home"></span>'); ?></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Data<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?php echo anchor('sponsor', 'Sponsor'); ?></li>
								<li><?php echo anchor('imigran', 'Imigran'); ?></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ijin Tinggal<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?php echo anchor('kitas', 'KITAS'); ?></li>
								<li><?php echo anchor('kitap', 'KITAP'); ?></li>
							</ul>
						</li>
						<li><?php echo anchor('laporan', 'Laporan'); ?></li>
					</ul>
				</div>
			</nav>
		</header>
		<section class="container" role="main">
			<?php echo $this->breadcrumbs->show(); ?>
			<div class="row">
				<div class="col-sm-12">
					<?php 
						if($this->session->flashdata('alert'))
						{
							echo $this->session->flashdata('alert');	
						}
					?>
				</div>
				<?php echo $content; ?>
			</div>
		</section>
	</div>
	<footer id="footer">
		<div class="container">
			<p>2014 &copy; KANIM II CIREBON Jl. Sultan Ageng Tirtayasa No. 51 Cirebon 45153</p>
			<a href="#top" class="btn btn-back-to-top" title="Back to top"><span class="elusive icon-arrow-up"></span></a>
		</div>
	</footer>
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>
	<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			// Tolltips
			$('[title]').tooltip();
			// Tabs
			$('.demoTabs a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			})
		});
		
		
		function confirmModal(msg,url) {
			if ($("#myModal").length > 0) {
			 	 $("#myModal").remove();
			}
			var divModal = null;
			divModal = $('<div id="myModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal primary fade in" />');
			divModal.append('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Konfirmasi</h4></div><div class="modal-body">'+msg+'</div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button><a href="'+url+'" class="btn btn-primary">Ya</a></div></div></div>');
			$('body').append(divModal);
			$('#myModal').modal('show');
			return false;
		}
	</script>
	<?php if(isset($script)) echo $script; ?>
	
	</body>
</html>
