<div class="col-sm-12">
<div class="row">
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('registrasi');?>">
			<span class="widget-icon elusive icon-file-new-alt"></span>
			<strong>Registrasi</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('dokter');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-group-alt"></span>
			<strong>Imigran</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('pasien');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-address-book-alt"></span>
			<strong>KITAS</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('pasien');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-address-book-alt"></span>
			<strong>KITAP</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('poliklinik');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-home-alt"></span>
			<strong>Poliklinik</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('laporan');?>">
			<span class="widget-icon elusive icon-graph-alt"></span>
			<strong>Laporan</strong>
		</a>
	</div>
</div>
<div class="row">
	<article class="col-sm-12">
		<div class="data-block">
			<section>
			   <?php 
					echo $map['js'];
					echo $map['html']; 
				?>
			</section>
		</div>
	</article>
</div>
</div>
