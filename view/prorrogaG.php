
<?php

include("header.php");
?>

<form method="post" action="">
<div class="box-body" >
              <div class="form-group" align="center">
                <label>DOCUMENTO:</label>
                <select class="form-control select2" style="width: 50%;">
                  <option >Seleccione documento</option>
                  <option>Plan Operativo</option>
                  <option>Cuadro de Necesidades</option>
                  <option>Presupuesto</option>
                  
                </select>
                </div></div>




 

<div class="box-body" >
   <div class="col-md-6" align="center">
              <div class="form-group"  >
                <label>AUTORIZADO POR:</label>
                <select class="form-control select2" style="width: 30%;">
                  <option >Resolución</option>
                  <option>Directiva</option>
                </select>
       </div></div>
    <div class="col-md-6">
       <div class="form-group">
                  <label for="exampleInputFile">Cargar archivo</label>
                  <input type="file" id="exampleInputFile">

                </div>       
    </div></div>

<div class="box-body">
   
              <!-- Date -->
              <div class="col-md-6" align="center">
              <div class="form-group" style="width:40%;">
                <label>Fecha de inicio:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                  </div></div>
    
              <div class="col-md-6">
              <div class="form-group" style="width:40%;">
                <label>Fecha de fin:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                  </div></div>
</div>
<div align="center">

<div style="width:30%;" align="center">
 <button type="button" class="btn btn-block btn-primary">REGISTRAR</button></div></div>
    </form>
<?php
include("footer.php");

?>