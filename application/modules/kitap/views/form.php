<article class="col-sm-7">
	<div class="dark data-block">
		<header>
			<h2><span class="elusive icon-user"></span> Data Imigran</h2>
		</header>
		<section>
			<?php echo form_open('kitap/post', 'class="form-horizontal" id="form_x"'); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label">No. Registrasi</label>
					<div class="col-lg-6">
						<?php
							echo form_hidden('id'); 
							echo form_input(array('name'=>'no_reg', 'class'=>'form-control', 'value'=>$no_reg, 'readonly'=>'readonly')); 
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">No. Paspor<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php echo form_dropdown('id_imigran', $opt_imigran, '', 'class="select1" id="no_paspor"', 'multiple'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Nama<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php echo form_input(array('name'=>'nm_imigran', 'class'=>'form-control', 'id'=>'nm_imigran')); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Jenis Kelamin<span class="text-danger">*</span></label>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-lg-6">
								<label class="checkbox-inline">
									<input name="kelamin" value="L" type="radio"> <i class="elusive icon-male"></i> Laki-laki
								</label>
							</div>
							<div class="col-lg-6">
								<label class="checkbox-inline">
									<input name="kelamin" value="P" type="radio"> <i class="elusive icon-female"></i> Perempuan
								</label>
							</div>
						</div>						
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Kelahiran<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-8">
								<?php echo form_input(array('name'=>'tmpt_lahir', 'class'=>'form-control', 'placeholder'=>'Tempat')); ?>
							</div>
							<div class="col-lg-4">
								<?php echo form_input(array('name'=>'tgl_lahir', 'class'=>'form-control datepicker', 'placeholder'=>'Tanggal')); ?>
							</div>
						</div>
						<?php echo form_error('tmpt_lahir') .form_error('tgl_lahir') ;?>						
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Kebangsaan<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php echo form_dropdown('id_negara', $opt_negara, '', 'class="select1"', 'multiple');  ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Sponsor<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php echo form_dropdown('id_sponsor', $opt_sponsor, '', 'class="select1"', 'multiple'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Alamat<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php echo form_textarea(array('name'=>'alamat', 'rows'=>'2', 'class'=>'form-control')); ?>
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