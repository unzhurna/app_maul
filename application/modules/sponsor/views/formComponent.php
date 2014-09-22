<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
<script>
	$(document).ready(function() {
		//Datepicker
		$('.datepicker').datepicker({
			"autoclose": true,
			format: 'dd/mm/yyyy'
		});
		//Select2
		$(".select1").select2({
			dataplaceholder: '-- Pilih --',
		});
	});
</script>
