
    <div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
  <div id="breadcrumb" class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="index.html"> <h4> Agregar Nueva Categoria</h4></a></li>
      
    </ol>
  </div>
  </div>



        <div class="row">
          <div class="col-lg-12">
            <br><br>
            
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            
              <form action="<?php echo base_url().'crud_categoria/agregar'; ?>" id="mi_form" method="post" role="form">

              <div class="form-group">
                <label>Nombre de la Categoria</label>
                <input name="nombre_cate" class="form-control">
              </div>

               <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
              </div>
 

              <div class="form-group">
                <input  type="hidden" name="post" value="1" />                
                 <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_categoria'; ?>" class="btn btn-primary">Cancelar</button>
              </div>   
                
              </fieldset>

              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>nombre categoria</th>
                                            <th>Descripcion</th>
                                            <th>Editar</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($categorias as $categoria):?>
                                            <tr>
                                            
                                            <td><?= $categoria->nombre_cate?></td>                                     
                                            <td><?= $categoria->descripcion?></td> 
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_categoria/editar/'.$categoria->id_categoria; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</button></td>
                                            </tr>
                                            <?php endforeach ;?>
                                    </thead>
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
            </form>


           </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
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