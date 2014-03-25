<?php

/**
 * Oswaldo Martinez Fonseca
 *  since
 *
 *Este archivo recibe la peticion y decide que controlador
 *se debe ejecutar
 */

//Recibe post
//Por defecto el metodo POST

$_POST['ctrl'] = (isset($_POST['ctrl'])) ? $_POST['ctrl'] : 1;
require("Controllers/baseCtrl.php");
$basectrl = new baseCtrl;
$basectrl->ejecutar($_POST['ctrl']);

?>