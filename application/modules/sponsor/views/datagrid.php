<div class="col-sm-12">
	<div class="dark data-block">
		<section>
			<table class="datatable table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="col-sm-1">No</th>
						<th>Sponsor</th>
						<th>No. Telp</th>
						<th>Email</th>
						<th>Website</th>
						<th>Alamat</th>
						<th class="col-sm-1"><?php echo anchor('sponsor/post', '<i class="elusive icon-plus-sign"></i> Tambah', 'class="btn btn-xs btn-info"');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($source as $row) :?>
						<tr class="odd gradeX">
							<td style="text-align: center">&nbsp;</td>
							<td><?php echo $row->nm_sponsor; ?></td>
							<td><?php echo $row->no_telp; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->website; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td style="text-align: center">
								<?php
									echo anchor('sponsor/post/'.$row->id, '<i class="elusive icon-edit"></i>', 'class="btn btn-xs" title="Edit"');
									echo '<a href="'.base_url().'sponsor/delete/'.$row->id.'" onclick="return confirmModal(\'Anda yakin akan menghapus?\',\''.base_url().'sponsor/delete/'.$row->id.'\')" class="btn btn-xs" title="Hapus"><i class="elusive icon-trash"></i></a>';
								?>
							</td>		
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</section>
	</div>
</div>
