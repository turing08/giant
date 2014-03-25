<?php

class calificacionesCtrl {
	public $modelo;
	function __construct() {
		//require('Models/califiacionesMdl.php');
		//$this->modelo =new calificacionesMdl();
	}


	function ejecutar(){
		if($_POST['act']=="opc") {
		switch($_POST['opcionCalificaciones']){
				 case 'calificacionesAlumno':
				 	require('Views/calificacionesAlumno.htm');
				 break;
				 /*case 'calificacionesCurso':
				 echo "calificacion esCurso";
				 require('vistas/calificacionesCursoVista.htm');
				 break;
				 case 'calificacionesrublo':
				 echo "calificacionesrublo";
				 //require('vistas/.htm');
				 break;*/
			 }
		}
	 	
		if($_POST['act']=="calificacionesAlumno") {
			switch($_POST['Submit']){
				case 'Alta':
				 	require('Views/altaCalificacionVista.htm');
				break;
				case 'Baja':
				 	echo '<br/>'. $_POST['Submit'];
				 	require('Views/bajaCalificacionAlumnoVista.htm');
				break;
				case 'Consultar':
				 	echo '<br/>'. $_POST['Submit'];
				 	require('Views/consultaCalificacionAlumnoVista.htm');
				break;
				case 'Modificar':
				 	echo '<br/>'. $_POST['Submit'];
				 //	require('vistas/modificaCalificacionAlumnoVista.htm');
				break;
			 }
	 	}

	 	if($_POST['act']=="altaAlumno"){
			echo 'Se procedera a dar de alta la calificacion del alumno '. $_POST['nombre'];
		}

		if($_POST['act']=="bajaAlumno"){
			echo '<br/>  dar de baja el alumno con el codigo';
		 }


		if($_POST['act']=="consultaAlumno"){
			echo '<br/> Se procedera a consultar la calificacion del alumno';
		}

		if($_POST['act']=="consultaAlumno"){
			echo '<br/> se procedera a  modificar la calificacion del alumno';
		}


	 	/*if($_POST['act']=="Baja")
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
		}*/
	}
}