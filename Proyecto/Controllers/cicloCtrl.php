<?php

class cicloCtrl {
	public $modelo;
	function __construct() {
		require('Models/cicloMdl.php');
		$this->modelo =new cicloMdl();
	}


	function ejecutar(){
		if($_POST['act']=="opc") {
		  	switch($_POST['opcionCiclo']){
				case 'Alta':
				 	require('Views/insertarCicloVista.htm');
				break;
				case 'Baja':
				 	require('Views/bajaCicloVista.htm');
				break;
				case 'Consulta':
				 	require('Views/consultaCicloVista.htm');
				break;
				case 'Modificar':
				 	require('Views/modificaCicloVista.htm');
				break;
			 }

	 	}
	 	
		if($_POST['act']=="Alta") {
			include('Controllers/validacionesCtrl.php');
			$errorciclo=validarCiclo($_POST['ciclo']);
			$fecinicial=validarfecha($_POST['fechainicial']);
			$fecfinal=validarfecha($_POST['fechafinal']);
			if($errorciclo && $fecinicial && $fecfinal)
			{
				if($fecinicial > $fecfinal)
					echo "Error la fecha inicial debe ser menor a la fecha final";
				else
					echo "El ciclo se agrego correctamente";
				//Agregarlo a la base de datos
			}
	 	}

	 	if($_POST['act']=="Baja")
	 	{
		 	include('Controllers/validacionesCtrl.php');
		 	$errorciclo=validarCiclo($_POST['ciclo']);
		 	if($errorciclo)
		 	{
		 		$ciclo = $this->modelo->bajaCiclo($_POST['ciclo']);
		 		if($ciclo)
		 			echo "EL CICLO SE DIO DE BAJA";
		 		else
		 			echo "El ciclo no existe";
		 	}
	 	}

	 	if($_POST['act']=="Consulta")
		{
			include('Controllers/validacionesCtrl.php');
			$errorciclo=validarCiclo($_POST['ciclo']);
		 	if($errorciclo)
		 	{
		 		$ciclo = $this->modelo->consultaCiclo($_POST['ciclo']);
		 		if($ciclo)
		 			require("Views/ViewConsultaCiclo.php");
		 		else
		 			echo "El ciclo no existe";
		 	}
		}

		if($_POST['act']=="Modificar")
		{
			include('Controllers/validacionesCtrl.php');
		 	$errorciclo=validarCiclo($_POST['ciclo']);
		 	if($errorciclo)
		 	{
		 		$ciclo = $this->modelo->modificarCiclo($_POST['ciclo']);
		 		if($ciclo)
		 			echo "EL CICLO SE MODIFICARA";
		 			//Modificar ciclo
		 		else
		 			echo "El ciclo no existe";
		 	}
		}
	}
}

?>