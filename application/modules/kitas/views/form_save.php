<article class="col-sm-7">
	<div class="dark data-block">
		<header>
			<h2><span class="elusive icon-user"></span> Data Imigran</h2>
		</header>
		<section>
			<?php echo form_open('kitas/post_save', 'class="form-horizontal"'); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label">No. Registrasi</label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'no_reg', 'class'=>'form-control', 'value'=>$no_reg, 'readonly'=>'readonly'));
							echo form_error('no_reg');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">No. Paspor<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_dropdown('id_imigran', $opt_imigran, set_value('id_imigran'), 'class="select1"', 'multiple'); 
							echo form_error('id_imigran');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Berlaku s/d<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'masa_berlaku', 'class'=>'form-control datepicker', 'value'=>set_value(format_dmy('masa_berlaku'))));
							echo form_error('masa_berlaku');
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
			<p>MAP</p>
		</section>
	</div>
</article>
