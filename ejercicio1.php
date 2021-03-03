<?php
                //  1	Programa que lea un valor de precio base y calcule su impuesto, 
                //  si es valor es mayor de 150.000 se le aplicará un 19% de impuestos, 
                //  en caso contrario se le aplicará un 16%

        $preciobase = (int) 1500000;
        if ( $preciobase > 150000 ) {
            $impuesto = (float) ( ( 19 * $preciobase ) / 100 );
            echo("El impuesto es: ".$impuesto);
        }
        elseif ($precio < 150000) {
            $impuesto = (float) ( ( 16 * $preciobase ) / 100 );
            echo("El impuesto es: ".$impuesto);
        }
        else {
            echo("Ingrese un preciobase valido");
        }

?>