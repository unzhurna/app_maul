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
		
		$("#form_x #no_paspor").bind("change", function() {
  			$.ajax({
  				type:'post',
  				datatype:'json',
				url:"<?php echo base_url(); ?>kitas/fill_form/"+ $("#no_paspor").val(),
  				success:function(data){
  					jsondata=$.parseJSON(data);
  					$("#form_x").autofill(jsondata);
  				}
  			});
		}); 
		
	});
	
</script>
