<article class="col-sm-7">
	<div class="dark data-block">
		<header>
			<h2><span class="elusive icon-user"></span> Data Imigran</h2>
		</header>
		<section>
			<?php echo form_open('kitas/post_save', 'class="form-horizontal" id="form_x"'); ?>
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
						<div class="input-group">
							<?php echo form_dropdown('id_imigran', $opt_imigran, '', 'class="select1" id="no_paspor"', 'multiple'); ?>
							<span class="input-group-btn"><button id="test" class="btn btn-xs"><i class="elusive icon-search"></i></button></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Nama<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'nm_imigran', 'class'=>'form-control',));
							echo form_error('nm_imigran');
						?>
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
						<?php echo form_error('kelamin'); ?>						
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Kelahiran<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-8">
								<?php 
									echo form_input(array('name'=>'tmpt_lahir', 'class'=>'form-control', 'placeholder'=>'Tempat'));
								?>
							</div>
							<div class="col-lg-4">
								<?php 
									echo form_input(array('name'=>'tgl_lahir', 'class'=>'form-control datepicker', 'placeholder'=>'Tanggal'));
								?>
							</div>
						</div>
						<?php echo form_error('tmpt_lahir') .form_error('tgl_lahir') ;?>						
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Kebangsaan<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_dropdown('id_negara', $opt_negara, '', 'class="select1"', 'multiple'); 
							echo form_error('id_negara');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Sponsor<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_dropdown('id_sponsor', $opt_sponsor, '', 'class="select1"', 'multiple'); 
							echo form_error('id_sponsor');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Alamat<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_textarea(array('name'=>'alamat', 'rows'=>'2', 'class'=>'form-control'));
							echo form_error('alamat');
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Masa Berlaku<span class="text-danger">*</span></label>
					<div class="col-lg-6">
						<?php 
							echo form_input(array('name'=>'expired', 'class'=>'form-control datepicker2'));
							echo form_error('expired');
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
		   <?php 
				echo $map['js'];
				echo $map['html']; 
			?>
		</section>
	</div>
</article>