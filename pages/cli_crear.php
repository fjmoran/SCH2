<div class="col-md-11">
<h2>Creación de Cliente</h2>
<h5>Ingrese los datos de la empresa o persona que desea registrar</h5><br>
  
  <form role="form">

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
        <div class="form-group">
          <label for="razon_social" id="razon_social_l">Razón Social:</label>
          <input id="razon_social" class="form-control" type="text" placeholder="Razón Social">           
        </div>
        <div class="form-group">
          <label for="fantasia" id="fantasia_l">Nombre de fantasía:</label>
          <input id="fantasia" class="form-control" type="text" placeholder="Nombre de fantasía">           
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input id="telefono" class="form-control" type="text" placeholder="Teléfono">          
        </div> 
        <div class="form-group">
          <label for="fax">Fax:</label>
          <input id="fax" class="form-control" type="text" placeholder="Fax">         
        </div>
        <div class="form-group">
          <label for="abogado">Abogado a cargo:</label>
            <select id="abogado" class="form-control">
              <option>No asignado</option>             
              <option>Abogado 1</option>              
              <option>Abogado 2</option>
              <option>Abogado 3</option>  
              <option>Abogado 4</option>  
              <option>Abogado 5</option>                                                                          
            </select>          
        </div>                                   
      </div>
      <div class="col-md-6"> <!-- columna derecha -->
        <div class="form-group">
          <label for="rut">RUT:</label>
          <input id="rut" class="form-control" type="text" placeholder="xx.xxx.xxx-x">        
        </div>
        <div class="form-group">
          <label for="giro">Giro:</label>
          <input id="giro" class="form-control" type="text" placeholder="Giro">       
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input id="email" class="form-control" type="email" placeholder="nombre@dominio.com">      
        </div>  
        <div class="form-group">
          <label for="web">Sitio Web:</label>
          <input id="web" class="form-control" type="text" placeholder="Sitio Web">       
        </div>                       
      </div>  
    </div>

  </form>
</div>

<script type="text/javascript">
function toggleSet(rad)
{
  var type = rad.value;
  if(type == 1){ //empresa
    alert("1");

  }
  if(type == 2){ //persona
    alert("2");

  }  
}
</script>
