<?php
class baseCtrl {
	function __construct() {
	}

	function ejecutar($ctrl){
		if($ctrl==1){
			require('Views/decisionInicio.htm');
			$_POST['controlador'] = (isset($_POST['controlador'])) ? $_POST['controlador'] : 1;
			 switch($_POST['controlador']) {
				 case 'Alumnos':
				 	echo "Alumnos...";
				 	require('Views/opcionAlumnoVista.htm');
				 	require('Controllers/alumnosCtrl.php');
				 break;
				 case 'Profesores':
					 echo 'Profesores...';
				 	require('Views/opcionProfesorVista.htm');
				 	require('Controllers/profesorCtrl.php');
				 break;
				 case 'Curso':
					 echo 'Curso...';
				 	require('Views/opcionCursoVista.htm');
				 	require('Controllers/cursoCtrl.php');
				 break;
				 case 'Ciclo_escolar':
				 	echo "Ciclo escolar";
					require('Views/opcionCicloescolarVista.htm');
				 	require('Controllers/cicloCtrl.php');
				 break;
				 case 'Calificaciones':
				 	echo 'Calificaciones...';
				 	require('Views/opcionCalificacionesVista.htm');
				 	require('Controllers/calificacionesCtrl.php');
				 break;
				 case 'Asistencias':
				 	echo 'Asistencias...';
				 break;
				 case 'Listas':
				 	echo 'Listas...';
				 break;
			 }
		}
		if($ctrl=="Alumno"){
			require('Controllers/alumnosCtrl.php');
			$alumnosctrl = new alumnosCtrl;
			$alumnosctrl->ejecutar();
		}

		if($ctrl=="Profesor"){
			require('Controllers/profesorCtrl.php');
			$profesorctrl = new profesorCtrl;
			$profesorctrl->ejecutar();
		}

		if($ctrl=="Curso"){
			require('Controllers/cursoCtrl.php');
			$cursoctrl = new cursoCtrl;
			$cursoctrl->ejecutar();
		}

		if($ctrl=="Ciclo"){
			require('Controllers/cicloCtrl.php');
			$cicloctrl = new cicloCtrl;
			$cicloctrl->ejecutar();
		}
		if($ctrl=="Calificaciones"){
			require('Controllers/calificacionesCtrl.php');
			$calificaciones = new calificacionesCtrl;
			$calificaciones->ejecutar();
		}
 	}

}

?>