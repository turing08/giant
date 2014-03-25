<?php
	function validarnombre($nombre)
	{
		if($nombre != "")
		{
			if(preg_match("/^([a-zA-ZáéíóúñÑ]{2,}([\s]+[a-zA-ZáéóíúñÑ]{2,})+$)/i", $nombre))
			{
				//echo "</br> Nombre correcto";
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
		return false;
	}
	function validarcorreo($correo)
	{
		if($correo != "")
		{
			if(preg_match("/^([a-zA-Z0-9._%+-]+[@][a-zA-Z]+\.com$)/i", $correo))
			{
				//echo "</br> Correo correcto";
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
		return false;
	}
	function validarURL($URL)
	{
		if($URL != "")
		{
			if(preg_match("/^(http:\/\/(.*\.(net$|com$|org$)))/i", $URL))
			{
				//echo "</br> URL correcto";
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
				//echo "</br> Github correcto";
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
		return false;
	}
	function validarCelular($Celular)
	{
		if($Celular != "")
		{
			if(preg_match("/^([1-9][0-9]{9}$)/i", $Celular))
			{
				//echo "</br> Celular correcto";
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
				//echo "</br> Codigo correcto";
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
		return false;
	}
	function validarEquipo($Equipo)
	{
		if($Equipo != "")
		{
			if(preg_match("/^([a-zA-Z0-9][a-zA-Z0-9-]+$)/i", $Equipo))
			{
				//echo "</br> Equipo correcto";
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
				//echo "</br> Carrera correcto";
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
		return false;
	}
	function validarnombrecurso($nombre)
	{
		if($nombre != "")
		{
			if(preg_match("/^([a-zA-ZáéíóúñÑ][a-zA-ZáéíóúñÑ\s]*$)/i", $nombre))
			{
				return true;
			}
			else
			{
				echo "</br> Nombre del curso incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El nombre del curso es un campo obligatorio";
		return false;
	}

	function validarnrc($nrc)
	{
		if($nrc != "")
		{
			if(preg_match("/^([a-zA-Z]{2}[0-9]{3}$)/i", $nrc))
			{
				return true;
			}
			else
			{
				echo "</br> NRC incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El nrc del curso es un campo obligatorio";
		return false;
	}

	//Valida fechas con formato que le mandes
	function validateDate($date, $format = 'Y-m-d')
	{
    	$d = DateTime::createFromFormat($format, $date);
    	return $d && $d->format($format) == $date;
	}

	function validarFecha($fecha)
	{
		if($fecha != "")
		{
			$validarfecha= (validateDate($fecha, 'd/m/Y'));// ? 'Valido' : 'No Valida';
			if($validarfecha)
			{
				$fec = DateTime::createFromFormat('d/m/Y', $fecha);
				return $fec;
			}
			else
			{
				echo "Sintaxis de fechas invalidas";
				return false;
			}
		}
		else
			echo "</br> Las fechas son un campo obligatorio";
			return false;
	}

	function validarCiclo($ciclo)
	{
		if($ciclo != "")
		{
			if(preg_match("/^([0-9]{4}-[abAB]$)/i", $ciclo))
			{
				return true;
			}
			else
			{
				echo "</br> Ciclo incorrecto Sintaxis invalida";
				return false;
			}
		}
		else
			echo "</br> El Ciclo es un campo obligatorio";
		return false;
	}

?>