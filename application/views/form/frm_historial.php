


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
             
              <li class="active"></i><center><h4> HISTORIAL DE CASOS</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nombre </th>
                                            <th>Reporto</th>
                                            <th>Descripcion</th>
                                            <th>Fecha</th>
                                            <th>Ubicacion</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>
   


                                            <?php foreach ($casos as $caso):?>
                                            <tr>
                                          
                                            <td><?= $caso->nombre_caso?></td>
                                            <td><?= $caso->reporto_caso?></td>
                                            <td><?= $caso->descripcion?></td> 
                                            <td><?= $caso->fecha_reporte?></td> 
                                            <td><?= $caso->ubicacion?></td>
                                            <td><?= $caso->estado?></td> 
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