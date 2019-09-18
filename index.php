<?php

/*
Site: CEPESC    
Autor: Matheus Sampaio  
Data: 25/08/2019
*/

$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

include 'app/views/header.php';

switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;
    
    case 'antioquia':
        include 'app/views/antioquia.php';
        break;
    
    case 'artigos':
        include 'app/views/artigos.php';
        break;

    case 'cafe':
        include 'app/views/cafe.php';
        break;

    case 'ceb':
        include 'app/views/ceb.php';
        break;

    case 'djalma':
        include 'app/views/djalma.php';
        break;

    case 'eventos':
        include 'app/views/eventos.php';
        break;

    case 'fraternidade':
        include 'app/views/fraternidade.php';
        break;
    
    case 'local':
        include 'app/views/local.php';
        break;
    
    default:
		include 'app/views/home.php';
		break;
}

include 'app/views/footer.php';
