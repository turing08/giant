
<?php
/*
function isLogged()
	{
		if(isset($_SESSION['username']))
		{
			return true;
		}
		else return false;
	}

	function admin(){
		if(isset($_SESSION['type']) && $_SESSION['type']=="administrador")
		return true;
		else
		return false;
	}

	function rumlogin()
	{

		session_start();

		$_SESSION['username']=$_POST['user'];
		$_SESSION['userpass']=$_POST['pass'];
		$_SESSION['authuser']=0;

		//Compruebe el nombre de usuario y la contraseña
		require('vistas/loginVista.hmt');
		if( ($_SESSION['username']== 'marco') AND
			 ($_SESSION['userpass']=='12345') )
		{
			$_SESSION['authuser']=1;
		}
		else
		{
			echo "SORRY , but you  dont'n have permission to view this
				page , you loser!";
				exit();
		}
	}

	 rumlogin();*/

class sessionCtl{

	public $session;
	function rumlogin()
	{

		session_start();
		//require('vistas/loginVista.hmt');
		$_SESSION['username']=$_POST['user'];
		$_SESSION['userpass']=$_POST['pass'];


		//Compruebe el nombre de usuario y la contraseña

		if( ($_SESSION['username']== 'marco') AND
			 ($_SESSION['userpass']=='12345') )
		{
			$_SESSION['authuser']=1;
		}
		else
		{
			echo "SORRY , but you  dont'n have permission to view this
				page , you loser!";
				exit();
		}
	}
}
