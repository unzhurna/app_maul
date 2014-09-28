<div class="col-sm-12">
<div class="row">
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('registrasi');?>">
			<span class="widget-icon elusive icon-file-new-alt"></span>
			<strong>Registrasi</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('sponsor');?>">
			<span class="badge"><?php echo $this->db->count_all_results('sponsor'); ?></span>
			<span class="widget-icon elusive icon-group-alt"></span>
			<strong>Sponsor</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('imigran');?>">
			<span class="badge"><?php echo $this->db->count_all_results('imigran'); ?></span>
			<span class="widget-icon elusive icon-group-alt"></span>
			<strong>Imigran</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('kitan');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-address-book-alt"></span>
			<strong>KITAS</strong>
		</a>
	</div>
	<div class="col-sm-2 col-xs-6">
		<a class="data-block widget-block" href="<?php echo base_url('kitap');?>">
			<span class="badge"><?php echo 'tet'; ?></span>
			<span class="widget-icon elusive icon-address-book-alt"></span>
			<strong>KITAP</strong>
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
