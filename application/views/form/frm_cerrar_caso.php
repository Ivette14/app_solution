
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

            
              <form action="<?php echo base_url().'crud_categoria/agregar'; ?>" id="mi_form" method="post" role="form">

              <div class="form-group">
                <label>Codigo</label>
          <input type="text"  class="form-control" name="codigo" id="codigo" value="<?= set_value('id_caso'); ?>">

              </div>

               <div class="form-group">
                <label>Nombre</label>
                <input type="text"  class="form-control" name="nombre_caso" id="nombre_caso" value="<?= set_value('nombre_caso'); ?>">

             
                 </div>


                  <div class="form-group">
                <label>Descripcion</label>
                <textarea id="descripcion"  class="form-control" name="descripcion" id="descripcion" value="<?= set_value('descripcion'); ?>">

             
                 </div>

               <div class="form-group">
                <label>Fecha de Reporte</label>
                <input type="text"  class="form-control" name="fecha_reporte" id="fecha_reporte" value="<?= set_value('fecha_reporte'); ?>">

             
                 </div>
 

 </div>

               <div class="form-group">
                <label>Ubicacion</label>
                <input type="text"  class="form-control" name="Ubicacion" id="ubicacion" value="<?= set_value('ubicacion'); ?>">

             
                 </div>
 </div>

               <div class="form-group">
                <label>Resporto Caso:</label>
                <input type="text"  class="form-control" name="reporto_caso" id="reporto_caso" value="<?= set_value('reporto_caso'); ?>">

             
                 </div>
 

</div>

               <div class="form-group">
                <label>Responsable de resolver caso</label>
                <input type="text"  class="form-control" name="responsable" id="responsable" value="<?= set_value('responsable'); ?>">

             
                 </div>

                 </div>

               <div class="form-group">
                <label>Fecha de Asignacion</label>
                <input type="text"  class="form-control" name="fecha_asignacion" id="fecha_asignacion" value="<?= set_value('fecha_asignacion'); ?>">

             
                 </div>
 <hr style="color: #0056b2" width="75%" />

<h3>Observaciones</h3>

               <div class="form-group">
                <label>Causa</label>
                <input type="text"  class="form-control" name="causa" id="causa" value="<?= set_value('causa'); ?>">
                 </div>


               <div class="form-group">
                <label>Conclusion</label>
                <input type="text"  class="form-control" name="conclusion" id="conclusion" value="<?= set_value('conclusion'); ?>">
                 </div>
 


               <div class="form-group">
                <label>Observacion</label>
                <input type="text"  class="form-control" name="observacion" id="observacion" value="<?= set_value('observacion'); ?>">
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
                </div>




              <div class="form-group">
                <input  type="hidden" name="post" value="1" />                
                 <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_categoria'; ?>" class="btn btn-primary">Cancelar</button>
              </div>   
                
              </fieldset>

            </form>


           </div>
        </div><!-- /.row -->

      </div>