<article class="col-sm-offset-4 col-sm-4">
	<div class="blue data-block">
		<section>
			<?php echo form_open('laporan/printout'); ?>
				<div class="form-group">
					<select name="tipe" class="form-control">
						<option value="all">Semua</option>
						<option value="kitas">KITAS</option>
						<option value="kitap">KITAP</option>
					</select>
				</div>
				<button class="btn btn-primary btn-block" type="submit"><i class="elusive icon-print"></i> Cetak</button>
			<?php echo form_close(); ?>
		</section>
	</div>
</article>
