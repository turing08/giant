

<?php
class alumnoModelo
{
	public $conexion;
	public $modelo;

	function _construct()
	{
		//Crea   la conexion a laase de datos
		//conectar();
		require('dbconfig.inc');//de un archivo
		$connexion = new msqli('localhost','root','vq/umpb3','phoenix');
		var_dump($connexion);
		if($connexion->connect_errno){
			die('no se pudo conectar');
		}

	}
	function altaAlumno()
	{
		//validar texto
		//query
		//Dar de alta el alumno
		//vista de datr de alta
		echo "entro";
		include('vistas/alumnosInsertado.htm');
	}

	function lista(){
		//buscar informacion de BD
		$result = $this->connexion('SELECT *
					  FROM student');
	}

	function consulta()
	{
		///saacar de la base de datos
		//validarTexto();
		$_GET['List']= array("Oswaldo","Marco","Michell");

	}
}



	//if($result = $mysql->prepare("SELECT * FROM WHWERE ?"));
?>
