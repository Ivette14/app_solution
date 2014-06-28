<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url().'crud_caso/responsable'; ?>">ASIGNACION</a></li>
		</ol>
	</div>
	</div>

	<!--Start Content--> 
	<div class="well">
	<div class="row show-grid-forms">
<label>Codigo Caso</label>
<input type="text" name="id_caso" id="caso" value="<? set_value('id_caso'); ?>">
<label>Nomobre Caso</label>
<input type="text" name="reporto_caso" id="nombre_caso" value="<? set_value('nombre_caso'); ?>">
<label>Descripcion</label>
<textarea name="descripcion" id="descricion" value="<? set_value('descricion'); ?>"></textarea> >
<label>Reporto Caso</label>
<input type="text" name="reporto_caso" id="reporto_caso" value="<? set_value('reporto_caso'); ?>">

<label>Ubicacion</label>
<input type="text" name="ubicacion" id="ubicacion" value="<? set_value('ubicacion'); ?>">
<label>Responsable De Resolver Caso</label>
<input type="text" name="responsable" id="responsable" value="<? set_value('responsable'); ?>">
<button  >Asignar</button>
<button>Cancelar</button>
</div>
</div>

	</div>
