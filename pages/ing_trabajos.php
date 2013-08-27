<?php
// require "recursos/zhi/CreaConn.php";
$today = date("d-m-Y");
?>
<div class="col-md-11">
<h2>Trabajos</h2>
<h5>Seleccione la fecha que desea vizualizar</h5>

<div class="row">
  <div class="input-group col-md-3">
    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
  	<input type="text" class="form-control" id="cal1" placeholder="Seleccione una fecha" readonly="true" value=<?php echo $today; ?> >
  </div>
</div>

<br>
	<a href="#agregar" role="button" class="btn btn-sm btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

<h4>Horas trabajadas</h4>

<table class="table table-striped table-bordered table-condensed">
  <thead>
    <tr>
      <th width=15%>Fecha</th>
      <th width=30%>Cliente</th>
      <th width=30%>Materia</th>
      <th width=15%>Tiempo cargado</th>
      <th width=10%>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>25-07-2013</td>    	
      <td>Cemento Polpaico S.A.</td>
      <td>Asesoria Legal</td>
      <td>2:30 hrs.</td>
      <td><span class="glyphicon glyphicon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></span></td>
    </tr>
    <tr>
      <td>21-07-2013</td>      	
      <td>Pesquera Pacific Star S.A.</td>
      <td>Redacción de documentos</td>
      <td>1:45 hrs.</td>
      <td><span class="glyphicon glyphicon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></span></td>
    </tr>
    <tr>
      <td>21-07-2013</td>    	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de escritura</td>
      <td>0:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>20-07-2013</td>     	
      <td>Telefónica Móviles Chile S.A.</td>
      <td>Redacción de escritura</td>
      <td>3:00 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Asesoria Legal</td>
      <td>1:15 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Agrícola Los Ciruelos Ltda.</td>
      <td>Asesoria Legal</td>
      <td>4:00 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Jaime Acevedo E.</td>
      <td>Redacción de documentos</td>
      <td>7:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Asesoria Legal</td>
      <td>3:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de documentos</td>
      <td>1:00 hrs</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Redacción de documentos</td>
      <td>2:45 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>    
  </tbody>
</table>

  <div class="col-md-12 text-center">
  <ul class="pagination pagination-sm" >
    <li><a href="#">Anterior</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Siguiente</a></li>
  </ul>
	</div>
  
</div><!-- col-md-10 -->

<!-- Modal 1 -->
  <div id="agregar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 id="myModalLabel">Ingreso de Trabajo</h4>
    </div>
    <div class="modal-body">

      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
            <div class="span6">
              <label for="cliente"><b>Cliente:</b></label>
              <input id="cliente" class="span12" type="text" autocomplete="off" placeholder="Nombre del cliente" data-provide="typeahead" data-source='["Deluxe Bicycla", "Super Deluxe Trampolina", "Super Duper Scootea", "Alto", "Deluxe Bicycla", "Super Deluxe Trampolina", "Super Duper Scootea"]'>
            </div>
            <div class="span6">
              <label for="cliente"><b>Materia:</b></label>
              <input id="cliente" class="span12" type="text" autocomplete="off" placeholder="Materia" data-provide="typeahead" data-source='["Deluxe Bicycle", "Super Deluxe Trampoline", "Super Duper Scooter"]'>
            </div>
         </div>

           <label for="monto"><b>Tiempo:</b></label>
          <div class="row-fluid">
            <div class="span6">
              <label for="horas">Horas</label>
                <select id="horas" class="span6">
                  <option>0</option>              
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>                                       
                </select>
            </div>
            <div class="span6">
              <label for="minutos">Minutos</label>
                <select id="minutos" class="span6">
                  <option>0</option>              
                  <option>15</option>
                  <option>30</option>
                  <option>45</option>
                </select>
            </div>
          </div>
          <label for="desc"><b>Descripción:</b></label>
          <textarea class="span12" rows="4"></textarea>
        </div>  
      </div> 

    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button class="btn btn-primary">Guardar</button>
    </div>
  </div>

<!-- Modal 2 -->
  <div id="editar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editarLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 id="myModalLabel">Edición de Trabajo</h4>
    </div>
    <div class="modal-body">

      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
            <div class="span6">
              <label for="fecha2"><b>Fecha:</b></label>
              <div class="input-append date" id="cal2" data-date-format="dd-mm-yyyy" data-date-language="es" data-date-autoclose="true">
                <input type="text" style="width: 218px" placeholder="Seleccione una fecha" readonly="true">
                <span class="add-on"><i class="icon-calendar"></i></span>
              </div>
            </div>
            <div class="span6">
            <!-- nada -->
            </div>
         </div>
          <div class="row-fluid">
            <div class="span6">
              <label for="cliente"><b>Cliente:</b></label>
              <input id="cliente" class="span12" type="text" autocomplete="off" placeholder="Nombre del cliente" data-provide="typeahead" data-source='["Deluxe Bicycla", "Super Deluxe Trampolina", "Super Duper Scootea", "Alto", "Deluxe Bicycla", "Super Deluxe Trampolina", "Super Duper Scootea", "Alto"]'>
            </div>
            <div class="span6">
              <label for="cliente"><b>Materia:</b></label>
              <input id="cliente" class="span12" type="text" autocomplete="off" placeholder="Materia" data-provide="typeahead" data-source='["Deluxe Bicycle", "Super Deluxe Trampoline", "Super Duper Scooter", "Alto"]'>
            </div>
         </div>

           <label for="monto"><b>Tiempo:</b></label>
          <div class="row-fluid">
            <div class="span6">
              <label for="horas">Horas</label>
                <select id="horas" class="span6">
                  <option>0</option>              
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>                                       
                </select>
            </div>
            <div class="span6">
              <label for="minutos">Minutos</label>
                <select id="minutos" class="span6">
                  <option>0</option>              
                  <option>15</option>
                  <option>30</option>
                  <option>45</option>
                </select>
            </div>
          </div>
          <label for="desc"><b>Descripción:</b></label>
          <textarea class="span12" rows="4"></textarea>
        </div>  
      </div> 	

    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button class="btn btn-primary">Modificar</button>
    </div>
  </div>

    <script type="text/javascript"> 
      
      $(document).ready(function(){
        /* Calendario 1*/       
        $('#cal1').datepicker();
        /* Calendario 2*/       
        $('#cal2').datepicker();        
        /* Tooltip */
        $('.table').tooltip({
          selector: "span[rel=tooltip]"
         })

      })
      jQuery(function($){
              $.datepicker.regional['es'] = {
                      closeText: 'Cerrar',
                      prevText: '&#x3c;Ant',
                      nextText: 'Sig&#x3e;',
                      currentText: 'Hoy',
                      monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                      'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                      monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                      'Jul','Ago','Sep','Oct','Nov','Dic'],
                      dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                      dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                      weekHeader: 'Sm',
                      dateFormat: 'dd-mm-yy',
                      firstDay: 1,
                      isRTL: false,
                      showMonthAfterYear: false,
                      yearSuffix: ''};
              $.datepicker.setDefaults($.datepicker.regional['es']);
      });      

    </script>
