<div class="span11">
<h2>Trabajos</h2>
<h5>Seleccione la fecha que desea vizualizar</h5>

<div class="input-append date" id="cal1" data-date-format="dd-mm-yyyy" data-date-language="es" data-date-autoclose="true">
	<input type="text" placeholder="Seleccione una fecha" readonly="true">
	<span class="add-on"><i class="icon-calendar"></i></span>
</div>

	<a href="#agregar" role="button" class="btn btn-primary pull-right" data-toggle="modal"><i class="icon-plus-sign icon-white"></i> Agregar</a>

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
      <td><i class="icon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></i></td>
    </tr>
    <tr>
      <td>21-07-2013</td>      	
      <td>Pesquera Pacific Star S.A.</td>
      <td>Redacción de documentos</td>
      <td>1:45 hrs.</td>
      <td><i class="icon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></i></td>
    </tr>
    <tr>
      <td>21-07-2013</td>    	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de escritura</td>
      <td>0:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>20-07-2013</td>     	
      <td>Telefónica Móviles Chile S.A.</td>
      <td>Redacción de escritura</td>
      <td>3:00 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Asesoria Legal</td>
      <td>1:15 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Agrícola Los Ciruelos Ltda.</td>
      <td>Asesoria Legal</td>
      <td>4:00 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Jaime Acevedo E.</td>
      <td>Redacción de documentos</td>
      <td>7:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Asesoria Legal</td>
      <td>3:30 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de documentos</td>
      <td>1:00 hrs</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Redacción de documentos</td>
      <td>2:45 hrs.</td>
      <td><a href="#editar" data-toggle="modal"><i class="icon-pencil" rel="tooltip" data-toggle="tooltip" title="Editar"></i></a>
      <i class="icon-remove" rel="tooltip" data-toggle="tooltip" title="Eliminar"></i></td>
    </tr>    
  </tbody>
</table>

<div class="pagination pagination-centered">
  <ul>
    <li><a href="#">Anterior</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Siguiente</a></li>
  </ul>
</div>
	
</div><!-- .span10 -->

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
          selector: "i[rel=tooltip]"
         })

      })

    </script>
