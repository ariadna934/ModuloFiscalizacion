<?php
include("header.php");
?>

<form role="form">
   <div class="box-body">
       <div class="form-group" align="center">
       <label>DOCUMENTO DE PETICIÓN</label>
       <select class="form-control select2" style="width: 50%;">
         <option selected="selected">Plan operativo</option>
         <option>Cuadro de necesidades</option>
         <option>Presupuesto</option>
         <option>Informe semestral</option>
         <option>Informe anual</option>
       </select>
     </div>        
    
    <div class="box-body">
        
        <div class="col-sm-6" style="width: 50%;" align="center">
            <label>N° OFICIO DE PETICIÓN:  </label><BR> 
            <input type="text" placeholder="Ingrese el número de oficio">
         </div>   
 
        <div class="col-sm-6" style="width: 50%;">
            <label>ASUNTO: </label><br>
            <textarea placeholer="El asunto es..." col="200" rows="7"></textarea>
        </div>     
       
    </div>
       
    <div class="box-body">
       <div class="form-group" align="center">
       <label>UNIDAD: </label>
       <select class="form-control select2" style="width: 50%;">
         <option selected="selected">DEPARTAMENTO DE INGENIERÍA DE SISTEMAS</option>
         <option>FACULTAD DE INGENIERÍA</option>
         <option>ESCUELA DE INGENIERÍA INDUSTRIAL</option>
       </select>
     </div> 
       
      <div class="row" align="center">       
         <label>AUTORIZADO POR: </label>
            <select class="form-control select" style="width: 50%;">
                <option>Resolución</option>
                <option>Directiva</option>
                <option>Sin documento</option>
             </select>         
     </div><br><br> 

      <div class="row" align="center">       
         <div class="col-sm-6" >
           <div class="form-group" style="width: 50%;">
                <label>FECHA DE RECEPCIÓN DE CARGO:  </label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
              </div>
         </div>

         <div class="col-sm-6" >
           <div class="form-group" style="width: 100%;">
            <label>PLAZO: </label> <input type="text" placeholder="DÍAS de plazo"> <label>  DÍAS.</label>
                
           </div>
         </div>         
     </div>        
         
         
    </div>
   </div>
     <center><input  type="submit" class="btn btn-primary" value="REGISTRAR"></center><BR><BR>
 </form>




<?php
include("footer.php");
?>

