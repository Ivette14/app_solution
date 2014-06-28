<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url().'crud_caso/resultado'; ?>">Resultados de Casos</a></li>
		</ol>
	</div>
	</div>

	<!--Start Content--> 
	<div class="well">
	<div class="row show-grid-forms">
<label>Codigo Caso</label>
<input type="text" name="id_caso" id="caso" value="<?= set_value('id_caso'); ?>">
<label>Nomobre Caso</label>
<input type="text" name="reporto_caso" id="nombre_caso" value="<?= set_value('nombre_caso'); ?>">
<label>Causa</label>
<textarea name="causa" id="causa" value="<?= set_value('causa'); ?>"></textarea> >
<label>Conclusion</label>
<textarea name="conclusion" id="conclusion" value="<?= set_value('causa'); ?>"></textarea> >

<label>Observaciones / Recomendaciones</label>
<textarea name="observacion" id="observacion" value="<?= set_value('causa'); ?>"></textarea> >



<button> Guardar Resultados</button>
<button> Guardar Resultados y Cerrar Caso</button>

<button> Cancelar </button>
</div>
</div>

	</div>
