<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.formautofill.js')?>"></script>
<script>
	$(document).ready(function() {
		//Datepicker
		$('.datepicker').datepicker({
			"autoclose": true,
			format: 'dd/mm/yyyy'
		});
		
		//Datepicker
		$('.datepicker2').datepicker({
			"autoclose": true,
			format: 'dd/mm/yyyy'
		});
		
		//Select2
		$(".select1").select2({
			'placeholder': '-- Pilih --',
		});
		
		$('#no_paspor').keyup(function(){
			var data = $.post("<?php echo base_url(); ?>kitas/fill_form/", {nopas: ""+no_paspor+""});
			$("#no_paspor").autofill(data);
		});
		
		$("#form_x #test").bind("click", function() {
		    $("#form_x").autofill(data, {
		        findbyname: false
		    });
		});
		
	
	});
	
</script>
