<?php 

function cargar_pagina($id) {
	switch ($id) {
    	case 1:
        	include('pages/ing_trabajos.php');
        	break;
    	case 2:
        	include('pages/ing_gastos.php');
        	break;
    	case 3:
        	include('pages/ing_abonos.php');
        	break;
    	case 11:
        	include('pages/cli_buscar.php');
        	break; 
    	case 12:
        	include('pages/cli_crear.php');
        	break; 
        case 30:
            include('pages/cli_editar.php');
            break; 
        case 31:
            include('pages/cli_ver.php');
            break;                                     	       	
    	default:
       		include('pages/default.php');
	}
}

function cargar_pagina_admin($id) {
    switch ($id) {                                            
        default:
            include('pages_admin/default.php');
    }
}

?>