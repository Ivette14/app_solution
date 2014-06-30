        <div class="row">
          <div class="col-lg-12">
            <br><br>
             <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Gestor de Categoria</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'crud_categoria/agregar'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button></div>       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nombre CategoriaSS</th>
                                            <th>Descripcion</th>
                                            </tr>
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
        <?= validation_errors(); ?>
            <!-- /.row -->