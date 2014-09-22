<article class="col-sm-7">
	<div class="dark data-block">
		<header>
			<h2><span class="elusive icon-home"></span> Data Sponsor</h2>
		</header>
		<section>
			<?php echo form_open('sponsor/post/'.$id, 'class="form-horizontal"'); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label">Nama<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'nm_sponsor', 'class'=>'form-control', 'value'=>set_value('nm_sponsor', $nm_sponsor)));
							echo form_error('nm_sponsor');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">No. Telp<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'no_telp', 'class'=>'form-control', 'value'=>set_value('no_telp', $no_telp)));
							echo form_error('no_telp');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Email<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'email', 'class'=>'form-control', 'value'=>set_value('email', $email)));
							echo form_error('email');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Website<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'website', 'class'=>'form-control', 'value'=>set_value('website', $website)));
							echo form_error('website');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Alamat<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_textarea(array('name'=>'alamat', 'rows'=>'2', 'class'=>'form-control', 'value'=>set_value('alamat', $alamat)));
							echo form_error('alamat');
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
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
<article class="col-sm-5">
	<div class="data-block">
		<section>
			<p><strong>Modul pasien.</strong> Berikut form utuk menambah data pasien di RS Budi Luhur. Periksa kembali data yang anda masukan</p>
		</section>
	</div>
</article>
