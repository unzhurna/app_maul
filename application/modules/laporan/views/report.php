<table  cellspacing="2" cellpadding="2">
	<tr>
    	<td align="center">
			<?php $this->pdf->SetFont("helvetica", "", 10); ?>
			<br />
			<p>
				<strong>Data Imigran</strong><br />
				<?php $no =1; ?>
			</p>
		</td> 
	</tr>
</table>
<br />
<table cellspacing="2" cellpadding="5" border="1">
	<tr>
		<th align="center" width="5%"><strong>No</strong></th>
		<th align="center" width="15%"><strong>No. Paspos</strong></th>
		<th align="center" width="25%"><strong>Imigran</strong></th>
		<th align="center" width="25%"><strong>Kebangsaan</strong></th>
		<th align="center" width="15%"><strong>Sponsor</strong></th>
		<th align="center" width="15%"><strong>Alamat</strong></th>
	</tr>
	<?php foreach($source as $row) : ?>
	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td><?php echo $row->no_paspor; ?></td>
		<td><?php echo $row->nm_imigran; ?></td>
		<td><?php echo $row->kode_iso; ?></td>
		<td><?php echo $row->sponsor; ?></td>
		<td><?php echo $row->alamat; ?></td>
	</tr>
	<?php endforeach; ?>
</table>