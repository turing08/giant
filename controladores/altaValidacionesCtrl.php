<?php
	function validarnombre($nombre)
	{
		if($nombre != "")
		{
			if(preg_match("/^([a-zA-ZáéíóúñÑ]{2,}([\s]+[a-zA-ZáéóíúñÑ]{2,})+$)/i", $nombre))
			{
				echo "</br> Nombre correcto";
				return true;
			}
			else
			{
				echo "</br> Nombre incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El nombre es un campo obligatorio";
	}
	function validarcorreo($correo)
	{
		if($correo != "")
		{
			if(preg_match("/^([a-zA-Z0-9._%+-]+[@][a-zA-Z]+\.com$)/i", $correo))
			{
				echo "</br> Correo correcto";
				return true;
			}
			else
			{
				echo "</br> Correo incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El correo es un campo obligatorio";
	}
	function validarURL($URL)
	{
		if($URL != "")
		{
			if(preg_match("/^(http:\/\/(.*\.(net$|com$|org$)))/i", $URL))
			{
				echo "</br> URL correcto";
				return true;
			}
			else
			{
				echo "</br> URL incorrecto Sintaxis invalida";
				return false;
			}
		}
	}
	function validarGithub($Github)
	{
		if($Github != "")
		{
			if(preg_match("/^([A-Za-z0-9_-]{1,39}$)/i", $Github))
			{
				echo "</br> Github correcto";
				return true;
			}
			else
			{
				echo "</br> Github incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El Github es un campo obligatorio";
	}
	function validarCelular($Celular)
	{
		if($Celular != "")
		{
			if(preg_match("/^([1-9][0-9]{9}$)/i", $Celular))
			{
				echo "</br> Celular correcto";
				return true;
			}
			else
			{
				echo "</br> Celular incorrecto Sintaxis invalida";
				return false;
			}
		}
	}
	function validarCodigo($Codigo)
	{
		if($Codigo != "")
		{
			if(preg_match("/^([A-Z]?[0-9]{9}$)/i", $Codigo))
			{
				echo "</br> Codigo correcto";
				return true;
			}
			else
			{
				echo "</br> Codigo incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El Codigo es un campo obligatorio";
	}
	function validarEquipo($Equipo)
	{
		if($Equipo != "")
		{
			if(preg_match("/^([a-zA-Z0-9][a-zA-Z0-9-]+$)/i", $Equipo))
			{
				echo "</br> Equipo correcto";
				return true;
			}
			else
			{
				echo "</br> Equipo incorrecto Sintaxis invalida";
				return false;
			}
		}
	}

	function validarCarrera($Carrera)
	{
		if($Carrera != "")
		{
			if(preg_match("/^([0-9]+$)/i", $Carrera))
			{
				echo "</br> Carrera correcto";
				return true;
			}
			else
			{
				echo "</br> Carrera incorrecto Sintaxis invalida";
				return false;
			}
		}

		else
			echo "</br> La Carrera es un campo obligatorio";
	}

?>
