
<?php

/*
 * @autor De La Cruz
 *  Index, inicializa el programa llamando a la vista de inicio conectando a la base de datos del modelo y regresando
 * respuestas
 *
 * */
 #llamar la precentacion vistas
 //mandar llamar a controlador en base a las acciones

	if($_POST['id']!=0 && $_POST['id']!=1 ){
		$_POST['id']= (int)$_POST['id'];
	}
	else
	{
		$_POST['id']=1;
	}
    var_dump($_POST['id']);
    //var_dump($_POST['opcionAlumno']);
	require("controladores/alumnoCtl.php");
	$decisionInicial = new alumnoCtrl;
	$decisionInicial->determinacion($_POST['id']);

?>
