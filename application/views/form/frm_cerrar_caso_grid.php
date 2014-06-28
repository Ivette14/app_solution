<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url().'crud_caso/cerrar_casos'; ?>">Cerrar Casos</a></li>
		</ol>
	</div>
	</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Casos</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>

			



<div class="box-content no-padding">
				<div id="datatable-1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="box-content"><div class="col-sm-6"><div id="datatable-1_filter" class="dataTables_filter"><label><input placeholder="Buscar" aria-controls="datatable-1" type="text"></label></div></div><div class="col-sm-6 text-right"><div class="dataTables_length" id="datatable-1_length"><label><div id="s2id_autogen1" class="select2-container"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">10</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input id="s2id_autogen2" class="select2-focusser select2-offscreen" type="text"></div><select class="select2-offscreen" tabindex="-1" aria-controls="datatable-1" size="1" name="datatable-1_length"><option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="clearfix"></div></div>

				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>Codigo </th>
							<th>Caso</th>
							<th>causa</th>
							<th>conclusion</th>
							<th>Observaciones</th>
							<th>Accion</th>
							
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
						<?php foreach ($caso as $caso):?>
                                            <tr>
                                            <td><?= $caso->id_caso?></td> 
                                            <td><?= $caso->nombre_caso?></td>
                                            <td><?= $caso->causa?></td> 
                                            <td><?= $caso->conclusion?></td> 
                                            <td><?= $caso->observacion?></td>
       <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_caso/cerrar/'.$caso->id_caso; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Cerrar Caso</button></td>
                                 </tr>
                                    <?php endforeach ;?>           
					<!-- End: list_row -->
					</tbody>
					<tfoot>
						<tr>
							<th>Codigo </th>
							<th>Caso</th>
							<th>causa</th>
							<th>conclusion</th>
							<th>Observaciones</th>
							<th>Accion</th>
						</tr>
					</tfoot>
				</table>
				

<div class="box-content">
<div class="col-sm-6">
<div id="datatable-1_info" class="dataTables_info">Mostrando 1 de 10 de 100 entries</div>
</div>
<div class="col-sm-6 text-right">
<div class="dataTables_paginate paging_bootstrap">
	<ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div><div class="clearfix"></div></div></div>
			</div>

			</div>
			</div>
		</div>
	</div>
</div>
</div>