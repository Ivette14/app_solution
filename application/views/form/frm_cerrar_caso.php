
    <div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
  <div id="breadcrumb" class="col-md-12">
    <ol class="breadcrumb">
      <li><a href="index.html"> <h4> Cerrar Caso</h4></a></li>
      
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

            
              <form id="mi_form" method="post" role="form">

              <div class="form-group">
          <input type="hidden"  class="form-control" name="id_caso" id="id_caso" value="<?= set_value('id_caso',$dato['id_caso']);?>">

              </div>

               <div class="form-group">
                <label>Nombre</label>
          <? echo $dato['nombre_caso']; ?>

             
                 </div>


                  <div class="form-group">
                <label>Descripcion</label>
                <?php echo $dato['descripcion']; ?>

                 </div>

               <div class="form-group">
                <label>Fecha de Reporte</label>
                  <?php echo $dato['fecha_reporte']; ?>

             
                 </div>
 



               <div class="form-group">
                <label>Ubicacion</label>
    <?php echo $dato['ubicacion']; ?>

             
                 </div>


               <div class="form-group">
                <label>Resporto Caso:</label>
                 <?php echo $dato['reporto_caso']; ?>
             
                 </div>
 



               <div class="form-group">
                <label>Responsable de resolver caso</label>
              <?php echo $dato1['responsable']; ?>

                 </div>

          

               <div class="form-group">
                <label>Fecha de Asignacion</label>
                <?php echo $dato1['fecha_asignacion']; ?>

             
                 </div>



               <div class="form-group">
                <label>Causa</label>
               <?php echo $dato1['causa']; ?>
                 </div>


               <div class="form-group">
                <label>Conclusion</label>
       <?php echo $dato1['conclusion']; ?>
                 </div>
 


               <div class="form-group">
                <label>Observacion</label>
 <?php echo $dato1['observacion']; ?>
                 </div>
             <div class="form-group">

              <label for="disabledSelect">Categoria</label>
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
                  <select required="required" autofocus="autofocus" value="<?= set_value('id_subcategoria');?>" class="form-control" name="nombre_subcate" id="nombre_subcate" onChange="submit()"> 
  <option value='' selected> Seleccionar...</option>
                  <?php 
$id_categoria = @$_POST['nombre_cate'];
$sql1="SELECT subcategoria.id_subcategoria, subcategoria.nombre_subcate
 FROM subcategoria 
Where id_categoria = $id_categoria;";
$rec1=mysql_query($sql1);
 while ($row=mysql_fetch_array($rec1))
                   {
            echo "<option value='".$row['id_subcategoria']."' ";
                 if(@$_POST['nombre_subcate']==$row['id_subcategoria'])
                  echo "SELECTED";
                  echo ">";
                  
                  echo $row['nombre_subcate'];
                  echo "</option>";
                  
                
                } 

?> 
  </select>
  <input type="hidden"  name="id_categoria" id="id_categoria" value="<?=  set_value('nombre_cate'); echo  @$_POST['nombre_cate'];?>">
  <input type="hidden"  name="id_subcategoria" id="id_subcategoria" value="<?=  set_value('nombre_cate'); echo  @$_POST['nombre_subcate'];?>">
                </div>
                       

              <div class="form-group">
                <input  type="hidden" name="post" value="1" />                
                 <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_categoria'; ?>" class="btn btn-primary">Cancelar</button>
              </div>   
                


            </form>


        </div><!-- /.row -->

      </div>
      </div>