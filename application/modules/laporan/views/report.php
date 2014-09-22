<table  cellspacing="2" cellpadding="2">
	<tr>
    	<td align="center">
			<?php $this->pdf->SetFont("helvetica", "", 10); ?>
			<br />
			<p>
				<strong>Data Kunjungan pasien</strong><br />
				Periode<br />
				<?php
					$no =1; 
					echo $periode; 
				?>
			</p>
		</td> 
	</tr>
</table>
<br />
<table cellspacing="2" cellpadding="5" border="1">
	<tr>
		<th align="center" width="5%"><strong>No</strong></th>
		<th align="center" width="15%"><strong>NO. POL</strong></th>
		<th align="center" width="25%"><strong>pasien</strong></th>
		<th align="center" width="25%"><strong>Dokter</strong></th>
		<th align="center" width="15%"><strong>Poliklinik</strong></th>
		<th align="center" width="15%"><strong>Tanggal</strong></th>
	</tr>
	<?php foreach($source as $row) : ?>
	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td><?php echo $row->no_pol; ?></td>
		<td><?php echo $row->nm_pasien; ?></td>
		<td><?php echo $row->dokter; ?></td>
		<td><?php echo $row->poliklinik; ?></td>
		<td align="center"><?php echo format_dmy($row->tanggal); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br />
<table cellpadding="2" cellspacing="2">
	<tr>
		<td align="center" width="550">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" width="550"><b>Cirebon, <?php echo format_date(date('Y-m-d'));?><br>Resepsionis, </b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b>(_______________________)</b></td>
	</tr>
</table>