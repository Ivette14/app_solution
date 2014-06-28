         
    <div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
  <div id="breadcrumb" class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="index.html"> <h4> Editar Categoria</h4></a></li>
      
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

            <form method="post" role="form">

             <div class="form-group">
                <label>Categoria</label>
                <input name="nombre_cate" class="form-control" value="<?= set_value('nombre_cate',$dato['nombre_cate']); ?>">
              </div>
               <div class="form-group">
                <label>Descripcion</label>
                <input name="descripcion" class="form-control" value="<?= set_value('descripcion',$dato['descripcion']); ?>">
              </div>

                            
              <div class="form-group">
                <input type="hidden" name="post" value="1" />                
                <button type="submit" value="editar" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_categoria'; ?>" class="btn btn-primary">Cancelar</button>                
              </div>              


            </form>

           </div>
        </div><!-- /.row -->
      <?= validation_errors(); ?>        
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















