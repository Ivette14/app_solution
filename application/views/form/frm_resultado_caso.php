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


<TABLE>
<tr>
<td>
	<div class="form-group"><label>Codigo Caso</label>
<br><br></td>
<td>&nbsp;&nbsp;&nbsp;</td>

<td><input type="text" name="id_caso" id="caso" ReadOnly class="form-control" value="<?=set_value('id_caso',$dato['id_caso']);?>">
<br><br></td></div>
</tr>

<tr>
<td><div class="form-group"><label>Nombre Caso</label>
<br><br></td><td>&nbsp;</td>
<td><input type="text" name="nombre_caso" id="nombre_caso" ReadOnly class="form-control" value="<?=set_value('nombre_caso',$dato['nombre_caso']);?>">
<br><br></td></div>

</tr>

<tr>
<td><div class="form-group"><label>Causa</label>
<br><br></td><td>&nbsp;</td>
<td><textarea name="causa" id="causa" value="<?= set_value('causa'); ?>" class="form-control" rows="3" ></textarea> 
<br><br></td></div>

</tr>


<tr>
<td><div class="form-group"><label>Conclusion</label>
<br><br></td><td>&nbsp;</td>
<td><textarea name="conclusion" id="conclusion" class="form-control" rows="3" value="<?= set_value('causa'); ?>"></textarea> 
<br><br></td></div>


</tr>
<tr>
<br><br><td><div class="form-group"><label>Observaciones / Recomendaciones</label>
</td><td>&nbsp;</td>
<td><textarea name="observacion" id="observacion" rows="3" class="form-control" value="<?= set_value('causa'); ?>"></textarea> 
<br><br></td></div>


</tr>

</table>


<input  type="hidden" name="post" value="1" />                
<button type="submit" class="btn btn-primary" onclick="if(confirm('Esta a punto de Guardar Cambios'))
alert('ok!');
else alert('ok')" >Guardar Resultados</button>
<input onclick=location="<?php echo base_url().'crud_caso/casos_con_responsable'; ?>"  class="btn btn-primary" type="reset" value="cancelar">
</form>
</div>     
</div>

              <?= validation_errors(); ?>
	</div>
