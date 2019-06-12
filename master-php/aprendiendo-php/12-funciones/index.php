<?php
	/* Es un conjunto deinstrucciones agrupadas bajo un nombre concreto
	y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos*/

	function muestraNombres(){
		echo "Brandon Jesus";
		echo "Gilberto Montes";
		echo "Jose Ramon";
		echo "Aldo Edgar";
	}

	muestraNombres();

    function tabla($number){
        echo "<h3>Tabla de multiplica</h3>";
        for($i = 1; $i <= 10; $i++){
            $operacion = $numero*$i;
            echo "$numero x $i = $operacion</br>";
        }
    }
    
    if(isset($_GET['nuemro'])){
        tabla($_GET['numero']);
    }else{
        echo "No hay numero para sacar la tabla";
    }

    //Ejemplo 3
    function calcudadora($numero1, $numero2, $negrita = false){
        $suma = $numero1 + $numero2;
        $resta = $numero1 + $numero2;
        $multiplicacion = $numero1* $numero2;
        $division = $numero1 / $numero2;

        $cadenaTexto = "";

        if($negrita){
        	$cadenaTexto .= "<h1>";
        }

        $cadenaTexto .= "Suma: $suma<br/>"
        $cadenaTexto .= "Resta: $resta<br/>"
        $cadenaTexto .= "Multiplicacion: $multiplicacion<br/>"
        $cadenaTexto .= "Division: $division<br/>"

          if($negrita){
        	$cadenaTexto .= "</h1>";
        }

        return $cadenaTexto;

    }

    echo calcudadora(20, 5);

    function devuelve($nombre){
    	return "El nombre es: $nombre";
    }

?>