<article class="col-sm-8">
	<div class="dark data-block">
		<header>
			<h2><span class="elusive icon-pencil"></span> Profil Admin</h2>
		</header>
		<section>
			<?php echo form_open('auth/profile/', 'class="form-horizontal"'); ?>
				<div class="form-group">
					<label class="col-lg-2 control-label">Nama</label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'nama', 'class'=>'form-control', 'value'=>set_value('nama', $nama)));
							echo form_error('nama');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">Username<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'username', 'class'=>'form-control', 'value'=>set_value('username', $username)));
							echo form_error('username');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">Kata sandi <i class="text-danger">*</i></label>
					<div class="col-lg-6">
						<?php 
							echo form_password(array('class'=>'form-control', 'name'=>'password', 'placeholder'=>'Kata sandi baru'));
							echo form_error('password');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">Kofirmasi Sandi <i class="text-danger">*</i></label>
					<div class="col-lg-6">
						<?php 
							echo form_password(array('class'=>'form-control', 'name'=>'passconf', 'placeholder'=>'Kata sandi baru'));
							echo form_error('passconf');
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</section>
		<footer>
			<p><span class="text-danger">*</span>Wajib diisi!</p>
		</footer>
	</div>
</article>
<article class="col-sm-4">
	<div class="data-block">
		<section>
			<p>Sangoma is a flat &amp; bold HTML5 template for any backend, user interface or administration, both for desktop and mobile users. Built on latest Twitter Bootstrap and powered with LESS, Sangoma will save you hours in developing your project.</p>
		</section>
	</div>
</article>
