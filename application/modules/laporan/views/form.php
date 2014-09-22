<article class="col-sm-offset-4 col-sm-4">
	<div class="blue data-block">
		<section>
			<?php echo form_open('laporan/printout'); ?>
				<div class="input-group">
					<span class="input-group-addon"><i class="elusive icon-calendar"></i></span>
					<input class="form-control" id="DaterangePicker" name="tanggal" type="text">
					<span class="input-group-btn"><button class="btn btn-info" type="submit"><i class="elusive icon-print"></i> Cetak</button></span>
				</div>
			<?php echo form_close(); ?>
		</section>
	</div>
</article>
