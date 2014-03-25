<?php

class cursoCtrl {
	public $modelo;
	function __construct() {
		require('Models/cursoMdl.php');
		$this->modelo =new cursoMdl();
	}


	function ejecutar(){
		if($_POST['act']=="opc") {
		 	switch($_POST['opcionCurso']){
				case 'Alta':
				 	require('Views/cursoInsertarVista.htm');
				break;
				case 'Baja':
				 	require('Views/bajaCursoVista.htm');
				break;
				case 'Consulta':
				 	require('Views/consultaCursoVista.htm');
				break;
				case 'Modificar':
				 	require('Views/modificaCursoVista.htm');
				break;
			 }

	 	}
	 	
		if($_POST['act']=="Alta") {
			 //validar con expresiones regulares los campos para dar de alta
			include('Controllers/validacionesCtrl.php');
			$errornombre=validarnombrecurso($_POST['nombre']);
			$errornrc=validarnrc($_POST['nrc']);
			$fecinicial=validarfecha($_POST['fechainicial']);
			$fecfinal=validarfecha($_POST['fechafinal']);
			if($errornombre && $errornrc && $fecinicial && $fecfinal)
			{
				if($fecinicial > $fecfinal)
					echo "Error la fecha inicial debe ser menor a la fecha final";
				if(isset($_POST['lunes']) ==false && isset($_POST['martes'])==false && isset($_POST['miercoles'])==false && isset($_POST['jueves'])==false && isset($_POST['viernes'])==false)
				{
					echo "Error debe selecionar un dia para el curso";

				}
				else
					echo "El curso se agrego correctamente";
				//Agregarlo a la base de datos
			}
	 	}
	 	if($_POST['act']=="Baja")
	 	{
		 	include('Controllers/validacionesCtrl.php');
		 	$errornombre=validarnombrecurso($_POST['nombre']);
		 	$errornrc=validarnrc($_POST['nrc']);
		 	if($errornombre && $errornrc)
		 	{
		 		$curso = $this->modelo->bajaCurso($_POST['nombre'], $_POST['nrc']);
		 		if($curso)
		 			echo "EL CURSO SE DIO DE BAJA";
		 		else
		 			echo "El curso no existe";
		 	}
	 	}

	 	if($_POST['act']=="Consulta")
		{
			include('Controllers/validacionesCtrl.php');
			$errornombre=validarnombrecurso($_POST['nombre']);
		 	$errornrc=validarnrc($_POST['nrc']);
		 	if($errornombre && $errornrc)
		 	{
		 		$curso = $this->modelo->consultaCurso($_POST['nombre'], $_POST['nrc']);
		 		if($curso)
		 			require("Views/ViewConsultaCurso.php");
		 		else
		 			echo "El curso no existe";
		 	}
		}

		if($_POST['act']=="Modificar")
		{
			include('Controllers/validacionesCtrl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errornrc=validarnrc($_POST['nrc']);
		 	if($errornombre && $errornrc)
		 	{
		 		$curso = $this->modelo->modificarCurso($_POST['nombre'], $_POST['nrc']);
		 		if($curso)
		 			echo "EL CURSO SE MODIFICARA";
		 		//modificar el alumno;
		 		else
		 			echo "El curso no existe";
		 	}
		}
	}
}