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
	<form method="post" >   


<label>Codigo Caso</label>
<input type="text" name="id_caso" id="caso" value="<?=set_value('id_caso',$dato['id_caso']);?>">
<label>Nombre Caso</label>
<input type="text" name="nombre_caso" id="nombre_caso" value="<?=set_value('nombre_caso',$dato['nombre_caso']);?>">
<label>Causa</label>
<textarea name="causa" id="causa" value="<?= set_value('causa'); ?>"></textarea> 
<label>Conclusion</label>
<textarea name="conclusion" id="conclusion" value="<?= set_value('causa'); ?>"></textarea> 

<label>Observaciones / Recomendaciones</label>
<textarea name="observacion" id="observacion" value="<?= set_value('causa'); ?>"></textarea> 

<input  type="hidden" name="post" value="1" />                
<button type="submit" class="btn btn-primary" onclick="if(confirm('Esta a punto de Guardar Cambios'))
alert('ok!');
else alert('ok')" >Guardar Resultados</button>
<button> Cancelar </button>
</form>
</div>     
</div>

              <?= validation_errors(); ?>
	</div>
