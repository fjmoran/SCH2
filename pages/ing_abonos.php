<?php
require_once "../recursos/zhi/CreaConnv2.php";
$today = date("d-m-Y");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "select * from Abono";	

?>
<div class="col-md-11">
<h2>Abonos</h2>
<h5>Seleccione la fecha que desea vizualizar</h5>

<div class="row">
  <div class="input-group col-md-3">
    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
    <input type="text" class="form-control" id="cal1" placeholder="Seleccione una fecha" readonly="true">
  </div>
</div>

  <br>
	<a href="#agregar" role="button" class="btn btn-sm btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

<h4>Últimos abonos ingresados</h4></br>

<table class="table table-striped table-condensed">
  <thead style="text-align: center; color:#428BCA;">
    <tr>
      <th width=15%>Fecha</th>
      <th width=30%>Cliente</th>
      <th width=30%>Descripción</th>
      <th width=15%>Monto abonado</th>
      <th width=10%>Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    	echo "<tr>
      <td>{$row['fechaAbono']}</td>    	
      <td>{$row['Cliente_idCliente']}</td>
      <td>{$row['descripcionAbono']}</td>
      <td>{$row['montoAbono']} hrs.</td>
      <td><span class=\"glyphicon glyphicon-lock\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Facturado\"></span></td>
    </tr>";
    }

    /* free result set */
    $result->free();
}
?>
<!--    <tr>
      <td>25-07-2013</td>    	
      <td>Cemento Polpaico S.A.</td>
      <td>Asesoria Legal</td>
      <td>$ 100.000</td>
      <td><span class="glyphicon glyphicon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></span></td>
    </tr>
    <tr>
      <td>21-07-2013</td>      	
      <td>Pesquera Pacific Star S.A.</td>
      <td>Redacción de documentos</td>
      <td>$ 500.000</td>
      <td><span class="glyphicon glyphicon-lock" rel="tooltip" data-toggle="tooltip" title="Facturado"></span></td>
    </tr>
    <tr>
      <td>21-07-2013</td>    	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de escritura</td>
      <td>U$ 1.000</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>20-07-2013</td>     	
      <td>Telefónica Móviles Chile S.A.</td>
      <td>Redacción de escritura</td>
      <td>UF 10</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Asesoria Legal</td>
      <td>$ 400.000</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>18-07-2013</td>     	
      <td>Agrícola Los Ciruelos Ltda.</td>
      <td>Asesoria Legal</td>
      <td>UF 5</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Jaime Acevedo E.</td>
      <td>Redacción de documentos</td>
      <td>U$ 500</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>16-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Asesoria Legal</td>
      <td>$ 350.000</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Direct TV Chile Ltda.</td>
      <td>Redacción de documentos</td>
      <td>$ 250.000</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>15-07-2013</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>Redacción de documentos</td>
      <td>UF 15</td>
      <td><a href="#editar" data-toggle="modal"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>  -->   
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
	
</div><!-- col-md-11 -->

<!-- Modal 1 -->
<div id="agregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de Abono</h4>
      </div>
      <form role="form" name="agregar_abono" method="post" action="agregar_abono.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="nombre">Cliente:</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre del cliente">
              </div> 
            </div>             
          </div>           
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group">
                <label for="moneda">Moneda:</label>
                  <select id="moneda" class="form-control">            
                    <option>$</option>              
                    <option>USD</option>
                    <option>UF</option>                                                                                               
                  </select>          
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label for="monto">Monto:</label>
                <input id="monto" class="form-control" type="text" placeholder="Monto">
              </div>              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" class="form-control" rows="3"></textarea>
              </div>
            </div>             
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">guardar</button>
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal --> 
<!-- fin modal 1 -->
<!-- Modal 2 -->
<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editarLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Edición de Abono</h4>
      </div>
      <form role="form">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="cal2">Fecha:</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                  <input type="text" class="form-control" id="cal2" placeholder="Seleccione una fecha" readonly="true">
                </div>
              </div>
            </div>  
          </div>           
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="nombre">Cliente:</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre del cliente">
              </div> 
            </div>             
          </div>           
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group">
                <label for="moneda">Moneda:</label>
                  <select id="moneda" class="form-control">            
                    <option>$</option>              
                    <option>USD</option>
                    <option>UF</option>                                                                                               
                  </select>          
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label for="monto">Monto:</label>
                <input id="monto" class="form-control" type="text" placeholder="Monto">
              </div>              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" class="form-control" rows="3"></textarea>
              </div>
            </div>             
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">guardar</button>
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal --> 
<!-- fin modal 2 -->

<script type="text/javascript"> 
  $(document).ready(function(){
    /* Calendario 1*/       
    $('#cal1').datepicker();
    /* Calendario 2*/       
    $('#cal2').datepicker();        
    /* Tooltip */
    $('.table').tooltip({
      selector: "[rel=tooltip]"
     })
  })
</script>
