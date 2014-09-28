<article class="col-sm-offset-4 col-sm-4">
	<div class="blue data-block">
		<section>
			<?php echo form_open('laporan/printout1'); ?>
				<div class="form-group">
					<?php
						$opt_tipe = array('all'=>'Semua', 'kitas'=>'KITAS', 'kitab'=>'KITAB'); 
						echo form_dropdown('tipe', $opt_tipe, '', 'class="form-control"');
					?>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="elusive icon-calendar"></i></span>
					<input class="form-control" id="DaterangePicker" name="tanggal" type="text">
					<span class="input-group-btn"></span>
				</div>
				<br>
				<button class="btn btn-primary btn-block" type="submit"><i class="elusive icon-print"></i> Cetak</button>
            <?php echo form_close(); ?>
		</section>
	</div>
</article>