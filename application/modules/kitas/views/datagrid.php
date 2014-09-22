<div class="col-sm-12">
	<div class="dark data-block">
		<section>
			<table class="datatable table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No Registrasi</th>
						<th>No Paspor</th>
						<th>Imigran</th>
						<th>Sponsor</th>
						<th>Berlaku s/d</th>
						<th class="col-sm-1"><?php echo anchor('kitas/post_save', '<i class="elusive icon-plus-sign"></i> Tambah', 'class="btn btn-xs btn-info"');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($source as $row) :?>
						<tr class="odd gradeX">
							<td><?php echo $row->no_reg; ?></td>
							<td><?php echo $row->no_paspor; ?></td>
							<td><?php echo $row->nm_imigran; ?></td>
							<td><?php echo $row->nm_sponsor; ?></td>
							<td style="text-align: center"><?php echo format_dmy($row->masa_berlaku); ?></td>
							<td style="text-align: center">
								<?php
									echo anchor('kitas/post_update/'.$row->no_reg, '<i class="elusive icon-edit"></i>', 'class="btn btn-xs" title="Edit"');
									echo anchor('kitas/post_update/'.$row->no_reg, '<i class="elusive icon-eye-open"></i>', 'class="btn btn-xs" title="Detail"');
									echo '<a href="'.base_url().'kitas/delete/'.$row->no_reg.'" onclick="return confirmModal(\'Anda yakin akan menghapus?\',\''.base_url().'kitas/delete/'.$row->no_reg.'\')" class="btn btn-xs" title="Hapus"><i class="elusive icon-trash"></i></a>';
								?>
							</td>		
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</section>
	</div>
</div>
