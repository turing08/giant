<?php

class alumnosCtrl {
	public $modelo;
	function __construct() {
		require('Models/alumnoMdl.php');
		$this->modelo =new alumnoMdl();
	}


	function ejecutar(){
		if($_POST['act']=="opc") {
		 switch($_POST['opcionAlumno']) {
			case 'Alta':
			 	require('Views/alumnoInsertarVista.htm');
				break;
			case 'Baja':
				require('Views/bajaAlumnoVista.htm');
			break;
			case 'Consulta':
				require('Views/consultaAlumnoVista.htm');
			break;
			case 'Modificar':
				require('Views/modificaAlumnoVista.htm');
			break;
			}

	 	}
	 	
	 	// Opcion ALta validar los campos  para insertar el alumno en la BD
		if($_POST['act']=="Alta") {
			include('Controllers/validacionesCtrl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
			$errorcorreo=validarcorreo($_POST['correo']);
			$errorurl=validarURL($_POST['url']);
			$errorgithub=validarGithub($_POST['github']);
			$errorcelular=validarCelular($_POST['celular']);
			$errorcodigo=validarCodigo($_POST['codigo']);
			$errorequipo=validarEquipo($_POST['equipo']);
			$errorcarrera=validarCarrera($_POST['carrera']);

		 	if($errornombre && $errorcorreo && $errorurl && $errorgithub && $errorcelular && $errorcodigo && $errorequipo && $errorcarrera) 
			{
				//mandar  al modelo para insertar el alumno pero perguntar primero si no existe el alumno
				//Si fue exitosa los campos para insertar
				require('Views/insertadoAlumno.htm');
				//Llamar a alumnoMdl para insertar en la base de datos
			}

			//mandar mensaje de confirmacion o mensaje de error
	 	}

		if($_POST['act']=="Baja")
	 	{
		 	///validar los campos de nombre y codigo del alumno con expresiones regulares
		 	//var_dump($_POST['nombre']);
		 	include('Controllers/validacionesCtrl.php');
			//include('Models/alumnoMdl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$alumno = $this->modelo->bajaAlumno($_POST['nombre'], $_POST['codigo']);
		 		if($alumno)
		 			echo "EL ALUMNO SE DIO DE BAJA";
		 		else
		 			echo "El alumno no existe";
		 	}
	 	}
	 	//Actividadar  consulta Alumno
		if($_POST['act']=="Consulta")
		{
			include('Controllers/validacionesCtrl.php');
			//include('Models/alumnoMdl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$alumno = $this->modelo->consultaAlumno($_POST['nombre'], $_POST['codigo']);
		 		if($alumno)
		 			require("Views/ViewConsultaAlumno.php");
		 		else
		 			echo "El alumno no existe";
		 	}
		}
		//Modificar Alumno
		if($_POST['act']=="Modificar")
		{
			include('Controllers/validacionesCtrl.php');
			//include('Models/alumnoMdl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$alumno = $this->modelo->modificarAlumno($_POST['nombre'], $_POST['codigo']);
		 		if($alumno)
		 			echo "EL ALUMNO SE MODIFICARA";
		 		//modificar el alumno;
		 		else
		 			echo "El alumno no existe";
		 	}
		}
	}
}

?>