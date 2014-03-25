<?php   
    echo 'Nombre:   ' . $curso->nombre . '<br/>';  
    echo 'Calendario:   ' . $curso->calendario . '<br/>';
    echo 'NRC:   ' . $curso->NRC . '<br/>';
    echo 'Fecha inicial:   ' . $curso->fechainicial . '<br/>';
    echo 'Fecha Final   ' . $curso->fechafinal . '<br/>';
    echo 'Dias:   ' . '<br/>';
    foreach ($curso->dias as $key => $value) {
    	if($value == 1)
    		echo 'Lunes <br/>';
    	if($value == 2)
    		echo 'Martes <br/>';
    	if($value == 3)
    		echo 'Miercoles <br/>';
    	if($value == 4)
    		echo 'Jueves <br/>';
    	if($value == 5)
    		echo 'Viernes <br/>';
    }
  
?>