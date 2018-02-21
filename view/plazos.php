<?php
include("header.php");
?>
 <form role="form">
   <div class="box-body">
       <div class="form-group" align="center">
       <label>DOCUMENTO</label>
       <select class="form-control select2" style="width: 50%;">
         <option selected="selected">Plan operativo</option>
         <option>Cuadro de necesidades</option>
         <option>Presupuesto</option>
         <option>Informe semestral</option>
         <option>Informe anual</option>
       </select>
     </div>        
       
       
      <div class="row" align="center">       
         <div class="col-sm-6">
         <label>AUTORIZADO POR: </label>
            <select class="form-control select" style="width: 50%;">
                <option>Resolución</option>
                <option>Directiva</option>
                <option>Sin documento</option>
             </select>
         </div>

         <div class="col-sm-6" style="width: 50%;">
           <label for="exampleInputFile">Cargar archivo</label>
           <input type="file" id="exampleInputFile">
         </div>         
     </div> 

      <div class="row" align="center">       
         <div class="col-sm-6" >
           <div class="form-group" style="width: 50%;">
                <label>FECHA DE INICIO:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
              </div>
         </div>

         <div class="col-sm-6" >
           <div class="form-group" style="width: 50%;">
            <label>FECHA DE FIN:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
           </div>
         </div>         
     </div>        
         
         

   </div>
   <!-- /.box-body -->
     <center><input  type="submit" class="btn btn-primary" value="REGISTRAR"></center>
 </form>






<?php
include("footer.php");
?>
