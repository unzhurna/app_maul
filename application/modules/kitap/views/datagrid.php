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
						<th class="col-sm-1"><?php echo anchor('kitap/post', '<i class="elusive icon-plus-sign"></i> Tambah', 'class="btn btn-xs btn-info"');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($source as $row) :?>
						<tr class="odd gradeX">
							<td><?php echo $row->no_reg; ?></td>
							<td><?php echo $row->no_paspor; ?></td>
							<td><?php echo $row->imigran; ?></td>
							<td><?php echo $row->nm_sponsor; ?></td>
							<td style="text-align: center">
								<?php
									echo anchor('imigran/post/'.$row->id_imigran, '<i class="elusive icon-edit"></i>', 'class="btn btn-xs" title="Edit"');
									echo '<a href="'.base_url().'imigran/delete/'.$row->id_imigran.'" onclick="return confirmModal(\'Anda yakin akan menghapus?\',\''.base_url().'imigran/delete/'.$row->id_imigran.'\')" class="btn btn-xs" title="Hapus"><i class="elusive icon-trash"></i></a>';
								?>
							</td>		
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</section>
	</div>
</div>
