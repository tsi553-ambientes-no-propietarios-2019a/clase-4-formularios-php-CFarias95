<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. 
Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan 
para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” 
solo si faltan menos de 5 días.
*/
$numeros = range(0, 365, 1);
$dias=var_dump($numeros);

function validar($num){
    if($num<=0){
        echo"Ese dia no existe";
    }elseif($num<=31){
        echo"El dia $num pertenece al mes de Enero";
    }elseif ($num<=59){
        echo"El dia $num pertenece al mes de Febrero";
    }elseif ($num<=90){
        echo"El dia $num pertenece al mes de Marzo";
    }elseif ($num<=120){
        echo"El dia $num pertenece al mes de Abril";
    }elseif ($num<=151){
        echo"El dia $num pertenece al mes de Mayo";
    }elseif ($num<=181){
        echo"El dia $num pertenece al mes de Junio";
    }elseif ($num<=212){
        echo"El dia $num pertenece al mes de Julio";
    }elseif ($num<=243){
        echo"El dia $num pertenece al mes de Agosto";
    }elseif ($num<=273){
        echo"El dia $num pertenece al mes de Septiembre";
    }elseif ($num<=304){
        echo"El dia $num pertenece al mes de Octubre";
    }elseif ($num<=334){
        echo"El dia $num pertenece al mes de Noviembre";
    }elseif ($num<=365){
        echo"El dia $num pertenece al mes de Diciembre";
        if($num==360){
            echo"Faltan 5 Dias Para que se acabe el año";
        }elseif($num==361){
            echo"Faltan 4 Dias Para que se acabe el año";
        }elseif($num==362){
            echo"Faltan 3 Dias Para que se acabe el año";
        }elseif($num==363){
            echo"Faltan 2 Dias Para que se acabe el año";
        }elseif($num==364){
            echo"Faltan 1 Dia Para que se acabe el año";
        }elseif($num==365){
            echo"Mañana empieza otro año";
        }
    }


}

validar(200);
?>