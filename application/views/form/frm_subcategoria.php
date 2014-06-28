<div id="content" class="col-xs-12 col-sm-10">
		<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html"> Bienvenido</a></li>
			
		</ol>
	</div>
	</div>

		        <div class="row">
          <div class="col-lg-12">
            <br><br>
             <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Gestor de Subcategorias</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'crud_subcategoria/agregar'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button></div>       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Categoria</th>
                                            <th>Nombre Subcategoria</th>
                                            <th>Descripcion</th>
                                            <th>Ponderacion</th>
                                            <th>Editar</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($subcategorias as $subcategoria):?>
                                            <tr>
                                            
                                            <td><?= $subcategoria->nombre_cate?></td> 
                                            <td><?= $subcategoria->nombre_subcate?></td>                                     
                                            <td><?= $subcategoria->descripcion?></td> 
                                            <td><?= $subcategoria->ponderacion?></td> 
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_subcategoria/editar/'.$subcategoria->id_subcategoria; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</button></td>
                                            </tr>
                                            <?php endforeach ;?>
                                         

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                           
                        </div>
                        <!-- /.panel-body -->
                     
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <?= validation_errors(); ?>
            <!-- /.row -->

	</div>
	</div>

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