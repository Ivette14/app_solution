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
	<form method="post" role="form">
	 <div class="form-group">
<label>Codigo Caso</label> 
<input type="text" name="id_caso"  value="<?=set_value('id_caso',$dato['id_caso']);?>">
 </div>
 <div class="form-group">

<label>Nombre Caso</label>
<input readonly  name="nombre_caso"  value="<?=set_value('nombre_caso',$dato['nombre_caso']);?>">
</div>
 <div class="form-group">
<label>Descripcion</label>
<textarea readonly name="descripcion"   value="<?=set_value('descripcion',$dato['descripcion']); ?>"></textarea>
</div>
 <div class="form-group">
<label>Reporto Caso</label>
<input readonly name="reporto_caso"  value="<?=set_value('reporto_caso',$dato['reporto_caso']); ?>">
</div>
 <div class="form-group">
<label>Ubicacion</label>
<input readonly name="ubicacion" value="<?=set_value('ubicacion',$dato['ubicacion']); ?>">
</div>
 <div class="form-group">
<label>Responsable De Resolver Caso</label>
<input  name="responsable" value="<?=set_value('responsable'); ?>">
</div>
<input  type="hidden" name="post" value="1" />                
                  <button type="submit" class="btn btn-primary" onclick="if(confirm('Esta a putno de agregar un activo'))
alert('ok!');
else alert('ok')" >Asignar</button>
<button>Cancelar</button>
</form>
</div>
</div>

	</div>
