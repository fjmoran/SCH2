<div class="span11">
<h2>Información del cliente</h2>
<h5>Resumen de información</h5>

<ul class="nav nav-tabs" id="tabs_cliente">
  <li class="active"><a href="#cli" data-toggle="tab">Cliente</a></li>
  <li><a href="#fact" data-toggle="tab">Facturación</a></li>
  <li><a href="#cont" data-toggle="tab">Contactos</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="cli">
  
    Info cliente

  </div>
  <div class="tab-pane" id="fact">

    Info facturación

  </div>
  <div class="tab-pane" id="cont">

    Info Contactos
    
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
