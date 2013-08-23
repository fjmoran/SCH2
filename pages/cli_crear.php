<div class="span11">
<h2>Creación de Cliente</h2>
<h5>Ingrese los datos de la empresa o persona que desea registrar</h5>
<div class="row">
  <div class="span12">
    <label class="radio inline">
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" onclick="toggleSet(this)" checked>
        Empresa
    </label>
    <label class="radio inline">
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" onclick="toggleSet(this)">
        Persona
      </label>
    <br>
    <br>
    <div class="row">
      <div class="span6">
        <label for="razon_social" id="razon_social_l"><b>Razón Social:</b></label>
        <input id="razon_social" class="span10" type="text" placeholder="Razón Social"> 
        <label for="fantasia" id="fantasia_l"><b>Nombre de fantasía:</b></label>

        <label for="nombres" id="nombres_l" style="display: none"><b>Nombres:</b></label>
        <input id="nombres" class="span10" type="text" placeholder="Nombres" style="display: none"> 
        <label for="apellido2" id="apellido2_l" style="display: none"><b>Apellido materno:</b></label>
        <input id="apellido2" class="span10" type="text" placeholder="Apellido materno" style="display: none"> 

        <input id="fantasia" class="span10" type="text" placeholder="Nombre de fantasía"> 
        <label for="telefono"><b>Teléfono:</b></label>
        <input id="telefono" class="span10" type="text" placeholder="Teléfono"> 
        <label for="fax"><b>Fax:</b></label>
        <input id="fax" class="span10" type="text" placeholder="Fax"> 
        <label for="abogado"><b>Abogado a cargo:</b></label>
          <select id="abogado" class="span10">
            <option>No asignado</option>             
            <option>Abogado 1</option>              
            <option>Abogado 2</option>
            <option>Abogado 3</option>  
            <option>Abogado 4</option>  
            <option>Abogado 5</option>                                                                          
          </select>                                          
      </div>
      <div class="span6">

        <label for="apellido1" id="apellido1_l" style="display: none"><b>Apellido paterno:</b></label>
        <input id="apellido1" class="span10" type="text" placeholder="Apellido paterno" style="display: none"> 

        <label for="rut"><b>RUT:</b></label>
        <input id="rut" class="span10" type="text" placeholder="xx.xxx.xxx-x"> 
        <label for="giro"><b>Giro:</b></label>
        <input id="giro" class="span10" type="text" placeholder="Giro"> 
        <label for="email"><b>Correo Electrónico:</b></label>
        <input id="email" class="span10" type="email" placeholder="nombre@dominio.com">
        <label for="web"><b>Sitio Web:</b></label>
        <input id="web" class="span10" type="text" placeholder="Sitio Web">                
      </div>
    </div>
        </br>
    <label for="direccion"><b>Dirección</b></label> 
    <div class="row">
      <div class="span6">
        <label for="pais"><b>País:</b></label>
          <select id="pais" class="span10">
            <option>Chile</option>              
            <option>Argentina</option>
            <option>Perú</option>  
            <option>U.S.A.</option>  
            <option>Otro</option>                                                             
          </select>                                 
      </div>
      <div class="span6">
        <label for="region"><b>Región:</b></label>
          <select id="region" class="span10">
            <option>Región Metropolitana</option>              
            <option>Región Arica y Parinacota</option>
            <option>Región Tarapacá</option>  
            <option>Región Antofagasta</option>  
            <option>Extranjero</option>                                                             
          </select>               
      </div>
    </div>
    <label for="calle"><b>Calle/Avenida - Número- Departamento/Oficina:</b></label>
    <input id="calle" class="span11" type="text" placeholder="Dirección"> 
    <div>
      <p class="span11 text-right"><button class="btn">Cancelar</button>
      <button class="btn btn-primary">Guardar</button></p>
    </div>
    </div>    
  </div>
</div>
</div>

<script type="text/javascript">
function toggleSet(rad)
{
  var type = rad.value;
  if(type == 1){ //empresa
    var razsoc = document.getElementById('razon_social');
    razsoc.style.display = 'block';
    var razsoc_l = document.getElementById('razon_social_l');
    razsoc_l.style.display = 'block'; 
    var fan = document.getElementById('fantasia');
    fan.style.display = 'block';
    var fan_l = document.getElementById('fantasia_l');
    fan_l.style.display = 'block'; 

    var nom = document.getElementById('nombres');
    nom.style.display = 'none';
    var nom_l = document.getElementById('nombres_l');
    nom_l.style.display = 'none'; 
    var ap1 = document.getElementById('apellido1');
    ap1.style.display = 'none';
    var ap1_l = document.getElementById('apellido1_l');
    ap1_l.style.display = 'none'; 
    var ap2 = document.getElementById('apellido2');
    ap2.style.display = 'none';
    var ap2_l = document.getElementById('apellido2_l');
    ap2_l.style.display = 'none'; 

  }
  if(type == 2){ //persona
    var razsoc = document.getElementById('razon_social');
    razsoc.style.display = 'none';
    var razsoc_l = document.getElementById('razon_social_l');
    razsoc_l.style.display = 'none';   
    var fan = document.getElementById('fantasia');
    fan.style.display = 'none';
    var fan_l = document.getElementById('fantasia_l');
    fan_l.style.display = 'none'; 

    var nom = document.getElementById('nombres');
    nom.style.display = 'block';
    var nom_l = document.getElementById('nombres_l');
    nom_l.style.display = 'block'; 
    var ap1 = document.getElementById('apellido1');
    ap1.style.display = 'block';
    var ap1_l = document.getElementById('apellido1_l');
    ap1_l.style.display = 'block'; 
    var ap2 = document.getElementById('apellido2');
    ap2.style.display = 'block';
    var ap2_l = document.getElementById('apellido2_l');
    ap2_l.style.display = 'block'; 

  }  
}
</script>
