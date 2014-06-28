
    <div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
  <div id="breadcrumb" class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="index.html"> <h4> Agregar Nueva Sub-categoria</h4></a></li>
      
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

            
              <form action="<?php echo base_url().'crud_subcategoria/agregar'; ?>" id="mi_form" method="post" role="form">

             <div class="form-group">

              <label for="disabledSelect">Categoria Principal</label>
 <select required="required" autofocus="autofocus" value="<?= set_value('id_categoria');?>" class="form-control" name="nombre_cate" id="nombre_cate" onChange="submit()"> 
  <option value='' selected> Seleccionar...</option>
                  <?php
                  $sql="SELECT * FROM categoria";
                  $rec=mysql_query($sql);
                  
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['id_categoria']."' ";
                 if(@$_POST['nombre_cate']==$row['id_categoria'])
                  echo "SELECTED";
                  echo ">";
                  
                  echo $row['nombre_cate'];
                  echo "</option>";
                  
                
                } 
                  
                   ?>   

                  </select>
                </div>

<input type="hidden" name="id_categoria" id="id_categoria" value="<?=  set_value('nombre_cate'); echo  @$_POST['nombre_cate'];?>">      
              <div class="form-group">
                <label>Nombre de la Subcategoria</label>
                <input name="nombre_subcate" class="form-control">
              </div>

               <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Ponderacion</label>
                  <select id="disabledSelect" name="ponderacion" class="form-control" value="<?= set_value('ponderacion');?>">
                  <option>Seleccione la ponderacion</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  </select>
              </div>
 

              <div class="form-group">
                <input  type="hidden" name="post" value="1" />                
                 <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_subcategoria'; ?>" class="btn btn-primary">Cancelar</button>
              </div>   
                
              </fieldset>

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