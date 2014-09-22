<div class="col-sm-12">
	<div class="dark data-block">
		<section>
			<table class="datatable table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="col-sm-2">No Paspor</th>
						<th>Nama</th>
						<th>TTL</th>
						<th>L/P</th>
						<th>Kebangsaan</th>
						<th>Sponsor</th>
						<th>Alamat</th>
						<th class="col-sm-1"><?php echo anchor('imigran/post', '<i class="elusive icon-plus-sign"></i> Tambah', 'class="btn btn-xs btn-info"');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($source as $row) :?>
						<tr class="odd gradeX">
							<td><?php echo $row->no_paspor; ?></td>
							<td><?php echo $row->nm_imigran; ?></td>
							<td><?php echo $row->tmpt_lahir.", ".format_dmy($row->tgl_lahir); ?></td>
							<td style="text-align: center"><?php echo $row->kelamin; ?></td>
							<td style="text-align: center"><?php echo $row->kode_iso; ?></td>
							<td><?php echo $row->sponsor; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td style="text-align: center">
								<?php
									echo anchor('imigran/post/'.$row->id, '<i class="elusive icon-edit"></i>', 'class="btn btn-xs" title="Edit"');
									echo '<a href="'.base_url().'imigran/delete/'.$row->id.'" onclick="return confirmModal(\'Anda yakin akan menghapus?\',\''.base_url().'imigran/delete/'.$row->id.'\')" class="btn btn-xs" title="Hapus"><i class="elusive icon-trash"></i></a>';
								?>
							</td>		
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</section>
	</div>
</div>
