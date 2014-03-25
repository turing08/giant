<?php

 class alumnoCtrl
 {
	 public $controlador;
	 function _constructor(){
	 }
	 function determinacion($tipo=1){
		 ///var_dump($_POST['Selecccior']);
		 //require('controladores/alumnoSeccionCtrl.php');
		 //if($_SESSION['authuser']==0)
		 //include('vistas/loginVista.htm');
		//include('alumnoSeccionClt-php');
		 //if($_SESSION['authuser']==1)
		 //{
		 if($tipo==1 ){
			 require('vistas/decisionInicio.htm');
			 switch($_POST['decisionInicial']){
			 case 'Alumnos':
			 echo "Alumnos...";
			 require('vistas/opcionAlumnoVista.htm');
			 break;
			 case 'Profesores':
			 echo 'Profesores...';
			 require('vistas/opcionProfesorVista.htm');
			 break;
			 case 'Curso':
			 echo 'Curso...';
			 require('vistas/opcionCursoVista.htm');
			 break;
			 case 'Ciclo_escolar':
			 echo "Ciclo escolar";
			 require('vistas/opcionCicloescolarVista.htm');
			 break;
			 case 'Calificaciones':
			 echo 'Calificaciones...';
			 require('vistas/opcionCalificacionesVista.htm');
			 break;
			 case 'Asistencias':
			 echo 'Asistencias...';
			 require('vistas/opcionAsistenciasVista.htm');
			 break;
			 case 'Listas':
			 echo 'Listas...';
			  require('vistas/opcionListaVista.htm');
			 break;
		 }
		 }

		 if($tipo==2){
			 switch($_POST['opcionAlumno']){
				 case 'Alta':
				 require('vistas/alumnoInsertarVista.htm');
				 break;
				 case 'Baja';
				 echo 'Baja ...';
				 require('vistas/bajaAlumnoVista.htm');
				 break;
				 case 'Consulta';
				 echo "Consula ...";
				 require('vistas/consultaAlumnoVista.htm');
				 break;
				 case 'Modificar';
				 echo 'Modificar ...';
				 require('vistas/modificaAlumnoVista.htm');
				 break;
			 }

		 }

		 //Opcion id=3 para dar de baja a un alumno
		 if($_POST['id']==3)
		 {
			 ///validar los campos de nombre y codigo del alumno con expresiones regulares
			 var_dump($_POST['nombre']);
			 if(strlen($_POST['nombre'])<=0 || strlen($_POST['codigo']) <=0){
				 if(strlen($_POST['nombre'])<=0)
				 {
					 echo 'El campo nombre esta vacio';
				 }
				 if(strlen($_POST['codigo']) <=0){
					 echo "El campo de  codigo  esta vacio";
				 }

			 }
			 else
			 if(strlen($_POST['nombre'])>0 && strlen($_POST['codigo']) >0){
				 echo "se procedera a dar de  baja a el alumno: <br/>";
				 //Consultar modelo para ver si existe el alumno
				 //traer de modelo los datos del alumno para ver lo que se eliminara
				 //require('/var/www/html/Phoenix/vistas/.htm');
			 }
			 else
			 echo "N/A";

		 }
		// Opcion 4 validar los campos  para insertar el alumno en la BD
		 if($tipo==4){
			 //validar con expresiones regulares los compos para dar de alta
			include('controladores/altaValidacionesCtrl.php');
			var_dump($_POST['nombre']);
		 	validarnombre($_POST['nombre']);
			validarcorreo($_POST['correo']);
			validarURL($_POST['url']);
			validarGithub($_POST['github']);
			validarCelular($_POST['celular']);
			validarCodigo($_POST['codigo']);
			validarEquipo($_POST['equipo']);
			validarCarrera($_POST['carrera']);
			 //mandar  al modelo para insertar el alumno pero perguntar primero si no existe el alumno
			 //Si fue exitosa los campos para insertar
			 //mandar mensaje de confirmacion o mensaje de error
			 require('vistas/insertadoAlumno.htm');

		 }

		 //ID = 5 para La consulta de uno o unos  Alumno
		 if($tipo==5)
		 {
			 echo "Consulta";
		 }

		 /*Modificar id=5*/
		 if($tipo==6)
		 {
			 // verificar los campos llenados
			 //verificar que exista en la base de datos
			 /// desplegarlos datos del alumno a modificar
			 // modificarlo y ver mensaje de mysl para saber si se actualizo
			 echo "Modificar";
		 }


		 //id=7 Opciones de el Profesor
		 if($_POST['id']==7){

			 switch($_POST['opcionProfesor']){
				 case 'Alta':
				 require('vistas/profesorInsertarVista.htm');
				 break;
				 case 'Baja';
				 echo 'Baja ...';
				 require('vistas/bajaProfesorVista.htm');
				 break;
				 case 'Consulta';
				 echo "Consula ...";
				 require('vistas/consultaProfesorVista.htm');
				 break;
				 case 'Modificar';
				 echo 'Modificar ...';
				 require('vistas/modificaProfesorVista.htm');
				 break;
			 }
		 }

		 // id=8 para validar  el dar de alta un profesor
		 if($_POST['id']==8){
			 //validar con expresiones regulares los compos para dar de alta
			 var_dump($_POST['nombre']);
			 //mandar  al modelo para insertar el alumno pero perguntar primero si no existe el alumno
			 //Si fue exitosa los campos para insertar
			 //mandar mensaje de confirmacion o mensaje de error
			 require('vistas/insertadoProfesor.htm');
		 }

		 //ID=9 validar los campos para dar  de baja el profesor
		 if($_POST['id']==9){
				 echo "se procedera a dar de  baja a el profesor: <br/>";
				 //Consultar modelo para ver si existe el profespr
				 //traer de modelo los datos del alumno para ver lo que se eliminara
				 //require('/var/www/html/Phoenix/vistas/.htm');
		 }

		 //id=10 consulta de un profesor
		 if($_POST['id']==10){
			 echo "Consulta";
			 //Verificar si existe el profesor a consultar de ser asi
			 #mandar el codigo del alumno para sacarlo de la base de datos
			 // vista de la consulta con todos los datos
		 }

		 //id=11 Modificar  profesor
		 if($_POST['id']==11){
			 // verificar los campos llenados
			 //verificar que exista en la base de datos
			 /// desplegarlos datos del profesor a modificar
			 // modificarlo y ver mensaje de mysl para saber si se actualizo
			 echo "Modificar";
		 }

		 //id=12 Opciones  para el curo
		 if($_POST['id']==12){
			 switch($_POST['opcionCurso']){
				 case 'Alta':
				 require('vistas/cursoInsertarVista.htm');
				 break;
				 case 'Baja';
				 echo 'Baja ...';
				 require('vistas/bajaCursoVista.htm');
				 break;
				 case 'Consulta';
				 echo "Consula ...";
				 require('vistas/consultaCursoVista.htm');
				 break;
				 case 'Modificar';
				 echo 'Modificar ...';
				 require('vistas/modificaCursoVista.htm');
				 break;
			 }
		 }

		 //ALTA de un curso
		 if($_POST['id']==13){
			 //validar con expresiones regulares los compos para dar de alta
			 var_dump($_POST['nombre']);
			 var_dump($_POST['lunes']);
			 var_dump($_POST['martes']);
			 var_dump($_POST['miercoles']);
			 var_dump($_POST['jueves']);
			 var_dump($_POST['viernes']);
			 //mandar  al modelo para insertar el alumno pero perguntar primero si no existe el alumno
			 //Si fue exitosa los campos para insertar
			 //mandar mensaje de confirmacion o mensaje de error
		 }

		//Dar de baja un curso
		 if($_POST['id']==14){
		 echo "se procedera a dar de baja el curso <br/>";
		 var_dump($_POST['nombre']);
		 //Consultar modelo para ver si existe el profespr
		 //traer de modelo los datos del alumno para ver lo que se eliminara
		 //require('/var/www/html/Phoenix/vistas/.htm');
		 }

		 //id=10 consulta de  un curso
		 if($_POST['id']==15){
			 echo "Consulta del curso <br/>";
			 var_dump($_POST['nombre']);
			 //Verificar si existe el curso al consultar de  ser asi
			 #mandar los datos para sacarlo de la base de datos
			 // vista de la consulta con todos los datos
		 }

		 //Modificar un curso existente
		 if($_POST['id']==16){
			 // verificar los campos llenados
			 //verificar que exista en la base de datos
			 /// desplegarlos datos del curso a modificar
			 // modificarlo y ver mensaje de mysl para saber si se actualizo
			 echo "Modificar el curso de";
			 var_dump($_POST['nombre']);
		 }

		 //id=17 Ciclo escolar
		 if($_POST['id']==17){
			 switch($_POST['opcionCiclo']){
				 case 'Alta':
				 echo 'Alta...';
				 require('vistas/insertarCicloVista.htm');
				 break;
				 case 'Baja';
				 echo 'Baja ...';
				 require('vistas/bajaCicloVista.htm');
				 break;
				 case 'Consulta';
				 echo "Consula ...";
				 require('vistas/consultaCicloVista.htm');
				 break;
				 case 'Modificar';
				 echo 'Modificar ...';
				 require('vistas/modificaCicloVista.htm');
				 break;
			 }
		 }

		 //id= 18 dar de alta  un cliclo escolar
		 if($_POST['id']==18){
			 echo "Se dio de alta el curso de: ";
			 var_dump($_POST['nombre']);
		 }

		 //id= 19 baja un ciclo escolar
		 if($_POST['id']==19){
			 echo  "Se dio de baja el ciclo escolar: ";
			 var_dump($_POST['nombre']);
		 }

		 //id=20 consular los ciclos escolres existentes
		 if($_POST['id']==20){
			 echo  "Estos son los datos del curso:  ";
			 var_dump($_POST['nombre']);
		 }

		 //id=21 modificar  ciclo escolar
		 if($_POST['id']==21){
			 echo "Se procedera a modificar el ciclo escolar";
			 var_dump($_POST['nombre']);
		 }


		 /*validar calificaciones numéricas sobre 10 aceptando 1 decimal. Se permite también la nomenclatura NP y SD las cuales son interpretadas como 0 para los cálculos.*/
		 if($_POST['id']==22){
			 switch($_POST['opcionCalificaciones']){
				 case 'calificacionesAlumno':
				 require('vistas/calificacionesAlumno.htm');
				 break;
				 case 'calificacionesCurso':
				 echo "calificacion esCurso";
				 require('vistas/calificacionesCursoVista.htm');
				 break;
				 case 'calificacionesrublo':
				 echo "calificacionesrublo";
				 //require('vistas/.htm');
				 break;
			 }
		 }

		 //id=23 por alumno comprobar que  el alumno este o  que
		 // el codigo sea correcto para darlo de alta
		 if($_POST['id']==23){
			 var_dump($_POST['codigo']);
			 //verificar el codigo para proceder a dar de alta , modificar ,baja y consulta
			 switch($_POST['Submit']){
				 case 'Alta':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/altaCalificacionVista.htm');
				 break;
				 case 'Baja':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/bajaCalificacionAlumnoVista.htm');
				 break;
				 case 'Consultar':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/consultaCalificacionAlumnoVista.htm');
				 break;
				 case 'Modificar':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/modificaCalificacionAlumnoVista.htm');
				 break;
			 }
		 }

		 //id=24 calificaciones por curso
		 if($_POST['id']==24){
			 var_dump($_POST['curso']);
			 //verificar el curso para proceder a dar de alta , modificar ,baja y consulta
			 switch($_POST['Submit']){
				 case 'Alta':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/altaCalificacionCursoVista.htm');
				 break;
				 case 'Baja':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/bajaCalificacionCursoVista.htm');
				 break;
				 case 'Consultar':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/consultaCalificacionCursoVista.htm');
				 break;
				 case 'Modificar':
				 echo '<br/>'. $_POST['Submit'];
				 require('vistas/modificaCalificacionCursoVista.htm');
				 break;
			 }
		 }

			 ///Falta rublo id 25

			 //id=26 alta calificacion
		 if($_POST['id']==26){
			 //verificar si  los campos están bien escricturados
			 //verificar que el alumno no este ya en la base de datos
			 echo '<br/>';
			 var_dump($_POST['codigo']);
			 echo '<br/>Se procedera a dar de alta la calificacion del alumno '. $_POST['nombre'];
		 }

		 //id=27 a dar de alta
		 if($_POST['id']==27){
			 echo'<br/> Se procedera a dar de alta la calificacion del alumno';
		 }

		 //id=28 para para dar de baja calificaciones de alumno
		 if($_POST['id']==28){
			 echo '<br/>  dar de baja el alumno con el codigo'. $_POST['codigo'];
		 }

		 //id=29 consultar calificacion alumno
		 if($_POST['id']==29){
			 echo '<br/> Se procedera a consultar la calificacion del alumno';
		 }

		 //id=30 modificar el alumno de calificaciones
		 if($_POST['id']==30){
			 echo '<br/> se procedera a  modificar la calificacion del alumno';
		 }

		 //id=31 dar de baja el curso de calificaciones
		 if($_POST['id']==31){
			 echo '<br> se procedera a dar de baja la calificacion del alumno';
		 }

		 //id=32 consulta calificaciones curso
		 if($_POST['id']==32){
			 echo '<br> se procedera a consultar  la calificacion del alumno';
		 }

		 //id= 32 modificar calificaciones del curso
		 if($_POST['id']==33){
			 echo '<br> se procedera a consultar  la calificacion del alumno';
		 }

		 //id=34 ASISTENCIA opciones
		 if($_POST['id']==34){
			 switch($_POST['opcionAsistencia']){
				 case 'asistenciaAlumno':
				 echo 'es: '. $_POST['opcionAsistencia'];
				 require('vistas/asistenciaAlumno.htm');
				 break;
				 case 'asistenciaCurso':
				 var_dump($_POST['opcionAsistencia']);
				 //require('vistas/calificacionesCursoVista.htm');
				 break;
			 }
		 }

		 //id 35 asistencia por alumno
		 if($_POST['id']==35){
			 echo 'Asistencia por alumno';

		 }


		 ///Listar alumnos
		 if($_POST['id']==40){
			 switch($_POST['opcionLista']){
				 case 'Alta':
				 echo 'Alta...';
				 break;
				 case 'Consulta':
				 echo 'Consulta...';
				 require('vistas/consultaListaVista.htm');
				 break;
			 }
		 }


		//ver alumnos lista
		 if($_POST['id']==41){
			 echo '<br/> Los alumnos son:';

		 }
		 }
	 //}
 }
?>
