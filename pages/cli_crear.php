<?php

require_once "../recursos/zhi/CreaConnv2.php";

?>

<div class="col-md-11">
<h2>Creación de Cliente</h2>
<h5>Ingrese los datos de la empresa o persona que desea registrar</h5><br>

  <form role="form" name="crear_cliente" method="post" action="recursos/sch2/crear_cliente.php" target="Salida">
    <ul class="nav nav-tabs" id="tabs_crear">
      <li class="active"><a href="#datos_basicos" data-toggle="tab">Datos Básicos</a></li>
      <li><a href="#direccion" data-toggle="tab">Dirección</a></li>
    </ul>

<div class="tab-content">
  <div class="tab-pane active" id="datos_basicos">
    <!-- datos basicos -->
    <div class="row"> <!-- fila para sub titulo opcional -->
      <div class="col-md-12">
        <h4></h4>
      </div>
    </div>
    <div class="row"> <!-- fila para los radios -->
      <div class="col-md-12">
        <div class="radio-inline">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" onclick="toggleSet(this)" checked>Empresa
          </label>
        </div>
        <div class="radio-inline">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" onclick="toggleSet(this)">Persona
          </label>
        </div>
        <br>
      </div>
    </div>

    <div class="row"> <!-- fila con 2 columnas -->
      <div class="col-md-6"> <!-- columna izquierda -->
        <div class="form-group empresa"> <!-- empresa -->
          <label for="razon_social">Razón Social:</label>
          <input id="razon_social" class="form-control" type="text" placeholder="Razón Social" name="razon_social">
        </div>
        <div class="form-group empresa"> <!-- empresa -->
          <label for="fantasia">Nombre de fantasía:</label>
          <input id="fantasia" class="form-control" type="text" placeholder="Nombre de fantasía" name="fantasia">
        </div>

        <div class="form-group hidden persona"> <!-- persona -->
          <label for="nombres">Nombres:</label>
          <input id="nombres" class="form-control" type="text" placeholder="Nombres" name="nombres">
        </div>
        <div class="form-group hidden persona"> <!-- persona -->
          <label for="apellido2">Apellido materno:</label>
          <input id="apellido2" class="form-control" type="text" placeholder="Apellido materno" name="apellido2">
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input id="telefono" class="form-control" type="text" placeholder="Teléfono" name="telefono">
        </div>
        <div class="form-group">
          <label for="fax">Fax:</label>
          <input id="fax" class="form-control" type="text" placeholder="Fax" name="fax">
        </div>
        <div class="form-group">
          <label for="abogado">Abogado a cargo:</label>
            <select id="abogado" class="form-control" name="Usuario_idUsuario">
            	<?php
            		$query = "select idUsuario, nombreUsuario from Usuario where activoUsuario=1";

            		if ($result = $mysqli->query($query)){
            			while ($row = $result->fetch_assoc()) {
    								echo "<option value=\"{$row['idUsuario']}\">{$row['nombreUsuario']}</option>";
    							}
    						}
								$result->free();
            	?>
            </select>
        </div>
      </div>
      <div class="col-md-6"> <!-- columna derecha -->

        <div class="form-group hidden persona"> <!-- persona -->
          <label for="apellido1">Apellido paterno:</label>
          <input id="apellido1" class="form-control" type="text" placeholder="Apellido paterno" name="apellido1">
        </div>

        <div class="form-group">
          <label for="rut">RUT:</label>
          <input id="rut" class="form-control" type="text" placeholder="xx.xxx.xxx-x" name="rut">
        </div>
        <div class="form-group">
          <label for="giro">Giro:</label>
          <input id="giro" class="form-control" type="text" placeholder="Giro" name="giro">
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input id="email" class="form-control" type="email" placeholder="nombre@dominio.com" name="email">
        </div>
        <div class="form-group">
          <label for="web">Sitio Web:</label>
          <input id="web" class="form-control" type="text" placeholder="Sitio Web" name="web">
        </div>
      </div>
    </div>
    <!-- fin datos basicos -->
  </div>
  <div class="tab-pane" id="direccion">
    <!-- direccion -->
    <div class="row"> <!-- fila para sub titulo opcional -->
      <div class="col-md-12">
        <h4></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6"> <!-- columna derecha dirección -->
        <div class="form-group">
          <label for="pais">País:</label>
            <select id="pais" class="form-control" name="Pais_idPais">
							<?php
            		$query = "select idPais, nombrePais from Pais where activoPais=1";

            		if ($result = $mysqli->query($query)){
            			while ($row = $result->fetch_assoc()) {
    								echo "<option value=\"{$row['idPais']}\">{$row['nombrePais']}</option>";
    							}
    						}
								$result->free();
            	?>
            </select>
        </div>
        <div class="form-group">
          <label for="comuna">Comuna:</label>
            <select id="Comuna" class="form-control" name="Comuna_idComuna">
							<?php
            		$query = "select idComuna, nombreComuna from Comuna where activoComuna=1";

            		if ($result = $mysqli->query($query)){
            			while ($row = $result->fetch_assoc()) {
    								echo "<option value=\"{$row['idComuna']}\">{$row['nombreComuna']}</option>";
    							}
    						}
								$result->free();
            	?>
							<option>No aplica</option>
            </select>
        </div>
        <div class="form-group">
          <label for="depto">Oficina o Departamento:</label>
          <input id="depto" class="form-control" type="text" placeholder="Oficina o Departamento" name="depto">
        </div>
      </div>
      <div class="col-md-6"> <!-- columna izquerda dirección -->
        <div class="form-group">
          <label for="region">Región:</label>
            <select id="region" class="form-control" name="Region_idRegion">
            		<?php
            		$query = "select idRegion, nombreRegion from Region where  activoRegion=1";

            		if ($result = $mysqli->query($query)){
            			while ($row = $result->fetch_assoc()) {
    								echo "<option value=\"{$row['idRegion']}\">{$row['nombreRegion']}</option>";
    							}
    						}
								$result->free();
            	?>
            <option>No aplica</option>
            </select>
        </div>
        <div class="form-group">
          <label for="calle">Calle o Avenida:</label>
          <input id="calle" class="form-control" type="text" placeholder="Calle o Avenida" name="calle">
        </div>
      </div>
    </div>
    <!-- fin direccion -->
  </div>
</div>
    <div class="row pull-right"> <!-- fila para botones -->
      <div class="col-md-12">
        <p>
          <button class="btn btn-default">Cancelar</button>
          <button class="btn btn-primary">Guardar</button>
        </p>
      </div>
    </div>
  </form>
</div>
<iframe name="Salida"/>
<script type="text/javascript">
function toggleSet(rad)
{
  var type = rad.value;
  if(type == 1){ //empresa
    $('div.empresa').removeClass('hidden');
    $('div.persona').addClass('hidden');
  }
  if(type == 2){ //persona
    $('div.persona').removeClass('hidden');
    $('div.empresa').addClass('hidden');
  }
}
</script>
