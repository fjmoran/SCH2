<?php
setlocale(LC_CTYPE, "es_ES");

define("LATIN1_UC_CHARS", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ");
define("LATIN1_LC_CHARS", "àáâãäåæçèéêëìíîïðñòóôõöøùúûüý");

function SEC_TO_TIME($sec){
	$segundos = 0;
	$minutos = 0;
	$horas = 0;
	if ($sec != NULL){
		if($sec > 0){
			$segundos=$sec;
		}
		else {
			$segundos = 0;
		}
	}
	if ($segundos >= 60){
		$residuo = fmod($segundos,60);
		$minutos = ($segundos-$residuo)/ 60;
		$segundos = $segundos - $minutos*60;
	}
	if ($minutos >= 60){
		$horas = ($minutos-fmod($minutos,60)) / 60;
		$minutos = $minutos - $horas*60;
	}
	if ($segundos < 10){
		$seg = "0$segundos";
	}
	else {
		$seg = "$segundos";
	}
	if ($minutos < 10){
		$min = "0$minutos";
	}
	else {
		$min = "$minutos";
	}
	if ($horas < 10){
		$hrs = "0$horas";
	}
	else {
		$hrs ="$horas";
	}
	return sprintf("$hrs:$min");
}

function Cambia_Formato_Fecha($fecha){
	list($agno,$mes,$dia) = split("-",$fecha);
	$new_fecha = mktime(0,0,0,$mes,$dia,$agno);
	return $new_fecha;
}
function comando_mysql($sql){
	$rs = mysql_query($sql) or die("No se pudo realizar $sql ".mysql_error()."\n");
	return $rs;
}
function Cambia_fmto_Hora($hora){
	list($horas,$minutos,$segundos) = split(":",$hora);
	$total = ($horas*60+$minutos)*60+$segundos;
	return $total;
}
function array_hora($hora){
	// recibe la en formato de horas no de segundos
	$horas = floor($hora);
	$minutos = ($hora - $horas) * 60;
	$minutos = round($minutos+0.1);
	return array($horas,$minutos);
}

function buscar_usuarios_mandante($id_tarea){ // Se ocupa en caso de se modifica la tarea desde ejecucion ya que necesito notificarle al mandante
	$usuarios = array();
	$s_select_mandante = "select * from mandantes where id = '$id_tarea'";
	$rs_select_mandante = comando_mysql($s_select);
	$f_select_mandante = mysql_fetch_object($rs_select_mandante);
	if ($f_select_mandante->id_tarea_padre != NULL){
		$s_select_ejecucion = "select * from ejecucion_tareas where id='$f_select_mandante->id_tarea_padre'";
		$rs_select_ejecucion = comando_mysql($s_select_ejecucion);
		$f_select_ejecucion = mysql_fetch_object($rs_select_ejecucion);
		array_push($usuarios,buscar_usuarios_mandante($f_select_ejecucion->id_mandante_tarea));
		mysql_free_result($rs_select_ejecucion);
	}
	array_push($usuarios,$f_select_mandante->id_usuario);
	mysql_free_result($rs_select_mandante);
	return $usuarios;
}

function buscar_usuario_ejecucion($id_tarea){ // Se ocupa cuando el se modifica la tarea desde mandante para notificarle a los ejecucion
	$usuarios = array();
	$s_select_mandante = "select * from mandante_tareas where id_tarea_padre = '$id_tarea'";
	$rs_select_mandante = comando_mysql($s_select_mandante);
	if (mysql_num_rows($rs_select_mandante)!=0){
		$s_select_ejecucion = "select * from ejecucion_tareas where id_mandante_tarea='$f_select_mandante->id_'";
		$rs_select_ejecucion = comando_mysql($s_select_ejecucion);
		while ($f_select_ejecucion = mysql_fetch_object($rs_select_ejecucion)){
			array_push($usuarios,buscar_usuario_ejecucion($f_select_ejecucion->id));
		}
		mysql_fee_result($rs_select_ejecucion);
	}
	mysql_free_result($rs_select_mandante);
	$s_select_ejecucion = "select * from ejecucion_tarea where id ='$id_tarea'";
	$rs_select_ejecucion = comando_mysql($s_select_ejecucion);
	$f_select_ejecucion = mysql_fetch_object($$rs_select_ejecucion);
	array_push($usuarios,$f_select_ejecucion->id_usuario);
	mysql_free_result($rs_select_ejecucion);
	return $usuarios;
}
function TIME_TO_SEC($hora){
	list($horas,$minutos,$segundo) = split(":",$hora);
	$sec = $horas * 3600 + $minutos * 60 + $segundo;
	return $sec;
}

function myfragment($str, $n, $delim='...') { // {{{
   $len = strlen($str);
   if ($len > $n) {
       preg_match('/(.{' . $n . '}.*?)\b/', $str, $matches);
       return rtrim($matches[1]) . $delim;
   }
   else {
       return $str;
   }
}

/******************************************************/
/* Funcion paginar
 * actual:          Pagina actual
 * total:           Total de registros
 * por_pagina:      Registros por pagina
 * enlace:          Texto del enlace
 * Devuelve un texto que representa la paginacion
 */

function paginar($actual=1, $total, $por_pagina=10, $enlace,$href) {
  $total_paginas = ceil($total/$por_pagina);
  $anterior = $actual - 1;
  $posterior = $actual + 1;
  $texto = "<ul class=\"pagination pagination-sm\" >";

  if ($actual > 1) {
    $texto .= "<li onclick=\"$('#cuerpo').load('$enlace$anterior');\"><a href=\"".$href."_".$anterior."\">Anterior</a></li> ";
  }
  else {
    $texto .= "<li class=\"disabled\"><a href=#>Anterior</a></li> ";
  }
  for ($i=1; $i<$actual; $i++) {
    $texto .= "<li onclick=\"$('#cuerpo').load('$enlace$i');\"><a href=\"".$href."_".$i."\">$i</a></li> ";
  }
  $texto .= "<li class=\"active\"><span>$actual<span class=\"sr-only\">(current)</span></span></li> ";
  for ($i=$actual+1; $i<=$total_paginas; $i++) {
    $texto .= "<li onclick=\"$('#cuerpo').load('$enlace$i');\"><a href=\"".$href."_".$i."\">$i</a></li> ";
  }
  if ($actual<$total_paginas) {
    $texto .= "<li onclick=\"$('#cuerpo').load('$enlace$posterior');\"><a href=\"".$href."_".$posterior."\">Siguiente</a>";
  }
  else {
    $texto .= "<li class=\"disabled\"><a href=#>Siguiente</a></li>";
  }
  
  $texto .= "</ul>";
  return $texto;
}

function select_paginar($tabla,$where="",$pag=1,$tampag=10,$CAMPO="TITULO",$connect){
	$sql_count = "SELECT COUNT(*) FROM ". $tabla;
	if ((isset($where)) and ($where != "")) $sql_count .= " WHERE ".$where;
	$result = $connect->query($sql_count); 
	list($total) = $result->fetch_row();
	$reg1 = ($pag-1) * $tampag;
	return array($reg1,$total);
}
?>