<?php

class profesorCtrl {
	public $modelo;
	function __construct() {
		require('Models/profesorMdl.php');
		$this->modelo =new profesorMdl();
	}


	function ejecutar(){
		if($_POST['act']=="opc") {
		  	switch($_POST['opcionProfesor']){
				case 'Alta':
				 	require('Views/profesorInsertarVista.htm');
				break;
				case 'Baja':
				 	require('Views/bajaProfesorVista.htm');
				break;
				case 'Consulta':
				 	require('Views/consultaProfesorVista.htm');
				break;
				case 'Modificar':
				 	require('Views/modificaProfesorVista.htm');
				break;
			 }

	 	}
	 	
		if($_POST['act']=="Alta") {
			include('Controllers/validacionesCtrl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
			$errorcorreo=validarcorreo($_POST['correo']);
			$errorcelular=validarCelular($_POST['celular']);
			$errorcodigo=validarCodigo($_POST['codigo']);
			$errorcarrera=validarCarrera($_POST['carrera']);

		 	if($errornombre && $errorcorreo && $errorcelular && $errorcodigo && $errorcarrera) 
			{
				//mandar  al modelo para insertar el alumno pero perguntar primero si no existe el alumno
				//Si fue exitosa los campos para insertar
				require('Views/insertadoProfesor.htm');
				//Llamar a profesorMdl para insertar en la base de datos
			}
	 	}

	 	if($_POST['act']=="Baja")
	 	{
		 	//var_dump($_POST['nombre']);
		 	include('Controllers/validacionesCtrl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$profesor = $this->modelo->bajaProfesor($_POST['nombre'], $_POST['codigo']);
		 		if($profesor)
		 			echo "EL PROFESOR SE DIO DE BAJA";
		 		else
		 			echo "El profesor no existe";
		 	}
	 	}

	 	if($_POST['act']=="Consulta")
		{
			include('Controllers/validacionesCtrl.php');
			//include('Models/alumnoMdl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$profesor = $this->modelo->consultaProfesor($_POST['nombre'], $_POST['codigo']);
		 		if($profesor)
		 			require("Views/ViewConsultaProfesor.php");
		 		else
		 			echo "El profesor no existe";
		 	}
		}

		if($_POST['act']=="Modificar")
		{
			include('Controllers/validacionesCtrl.php');
			//include('Models/alumnoMdl.php');
		 	$errornombre=validarnombre($_POST['nombre']);
		 	$errorcodigo=validarCodigo($_POST['codigo']);
		 	if($errornombre && $errorcodigo)
		 	{
		 		$profesor = $this->modelo->modificarProfesor($_POST['nombre'], $_POST['codigo']);
		 		if($profesor)
		 			echo "EL PROFESOR SE MODIFICARA";
		 		//modificar el alumno;
		 		else
		 			echo "El profesor no existe";
		 	}
		}
	}
}

?>