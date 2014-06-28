
		<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url().'crud_caso'; ?>">NUEVO CASO</a></li>
		</ol>
	</div>
	</div>

		<!--Start Content--> 
	<div class="well">

	<div class="row show-grid-forms">
	<form  method="post">
	<TABLE width="550" height="259">
	<tr>
	<th width="215" height="37">
		Nombre Del Caso:</th>
		<th width="323"><input type="text" id="nombre_caso" name="nombre_caso" class="form-control" placeholder="Nombre del caso"  value="<?= set_value('nombre_caso');?>"></th>
		</tr>
	<tr>
	  <th height="66">	
		<label>Descripcion:</label></th>
		<th><textarea class="form-control" id"descripcion" name="descripcion" placeholder="Explicacion Del Caso"  value="<?= set_value('descripcion');?>"></textarea></th>
		</tr>	

		<tr>
		<th height="61">
		<label>Ubicacion Del Problema:</label></th>
		<th><input type="text" class="form-control" id="ubicacion" name="ubicacion"  value="<?= set_value('ubicacion');?>" placeholder="Ubicacion"></th>
		</tr>
	<tr>
		<th height="55">
		<label>Reportó el Caso o problema</label></th>
		<th><input type="text" class="form-control" id="reporto_caso" name="reporto_caso"  value="<?= set_value('reporto_caso');?>"placeholder="Reportador"></th>
		</tr>
		
		
		
 

		 <input  type="hidden" name="post" value="1" />      

<tr>
<td>           <center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" onclick="if(confirm('Esta a punto de agregar un caso'))
alert('ok!');
else alert('ok')" >Guardar</button>&nbsp;&nbsp;&nbsp;

		<input onclick=location="<?php echo base_url().''; ?>" type="reset"  class="btn btn-primary" value="cancelar">
</td></tr>
			
	</TABLE>

</form>
	</div>
	</div>
	</div>

              <?= validation_errors(); ?>

<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#el2").select2();
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>

		<!--End Content-->

