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
		<table>

<tr>
<td>
	 <div class="form-group">

<label>Codigo Caso</label> <br><br></td><td>&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" readonly name="id_caso" class="form-control" value="<?=set_value('id_caso',$dato['id_caso']);?>">
 </div>
 <br><br>
 </td>
</tr>
<tr>
<td> <div class="form-group">

<label>Nombre Caso</label><br><br>
</td><td>&nbsp;&nbsp;&nbsp;</td>

<td><input readonly  name="nombre_caso" class="form-control"  value="<?=set_value('nombre_caso',$dato['nombre_caso']);?>">
<br><br></div>
</td>
</tr>
<tr>
<td> <div class="form-group">
<label>Descripcion</label><br><br>
</td><td>&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" readonly name="descripcion"  class="form-control"  value="<?=set_value('descripcion',$dato['descripcion']); ?>">
<br><br></div>
</td>
</tr>
<tr>
<td> <div class="form-group">
<label>Reporto Caso</label><br><br>
</td><td>&nbsp;&nbsp;&nbsp;</td>
<td><input readonly name="reporto_caso" class="form-control"  value="<?=set_value('reporto_caso',$dato['reporto_caso']); ?>">
<br><br></div>
</td>

</tr>

<tr>
<td> <div class="form-group">
<label>Ubicacion</label><br><br>
</td><td>&nbsp;&nbsp;&nbsp;</td>
<td><input readonly name="ubicacion" class="form-control" value="<?=set_value('ubicacion',$dato['ubicacion']); ?>"><br><br>
</div>
</td>

</tr>
<tr>
<td> <div class="form-group">
<label>Responsable De Resolver Caso</label>
<br><br></td><td>&nbsp;&nbsp;&nbsp;</td>
<td><input  name="responsable"  class="form-control"  required= "required" value="<?=set_value('responsable'); ?>">
<br><br></div>
</td>

</tr>

</table>
<input  type="hidden" name="post" value="1" />                
                  <button type="submit" class="btn btn-primary" onclick="if(confirm('Se asignara responsable al caso.'))
alert('ok!');
else alert('no se ha asignado el responsable')" >Asignar</button>
<input onclick=location="<?php echo base_url().'crud_caso/responsable'; ?>" type="reset" class="btn btn-primary" value="cancelar">
</div>
</div>

	</div>
