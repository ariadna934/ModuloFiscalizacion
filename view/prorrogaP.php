
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
                <label>TIPO:</label>
                <select class="form-control select2" style="width: 30%;">
                  <option >Oficina</option>
                  <option>Departamento</option>
                </select>
       </div></div>
    <div class="col-md-6">
            <div class="form-group" >
                <label>NOMBRE:</label>
                <select class="form-control select2" style="width: 90%;">
                  <option selected="selected">Ingeniería Metalúrgica</option>
                  <option>Ingeniería Mecánica</option>
                  <option>Ingeniería de Materiales</option>
                  
                </select>
        </div></div></div>


 <div class="box-body" align="center">
     <label>UNIDADES SELECCIONADAS:</label>
              <table class="table table-bordered" style="width: 80%;" >
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tipo</th>
                  <th>Nombre</th>
                
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Departamento</td>
                  <td>
                    Ingeniería de Sistemas
                  </td>
                  
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Departamento</td>
                  <td>
                    Ingeniería Industrial
                  </td>
                  
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Departamento</td>
                  <td>
                    Ingeniería Metalúrgica
                  </td>
                  
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Departamento</td>
                  <td>
                    Ingeniería Civil
                  </td>
                
                </tr>
              </table>
            </div>

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

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<?php
include("footer.php");

?>