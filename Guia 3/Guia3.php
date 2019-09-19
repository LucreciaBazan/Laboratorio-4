
<?php

    // >>> EJERCICIO 1 <<< //
     
    $myNumber = 123; 
    $numberString = "123";

    echo "Hola"."<br>";
    echo $myNumber + $numberString . "<br>";
    // A- Realiza la suma entre el entero y el string, e imprime el resultado que es: 246

    echo $myNumber - $numberString. "<br>";
    // B - Realiza la resta entre el entero y el string, e imprime el resultado que es: 0

    echo $myNumber.$numberString;
    // C - Concatena las variables, imprimiendo: 123123
    
    // >>> EJERCICIO 2 <<< //

    if(1-1){
        echo "It´s right";
    }
        // A - Si
        // B - No
        // C - Si
        // D - Si
        // E - No
        // F - Si
        // G - Si
        // H - NO

        

    // >>> EJERCICIO 3 <<< //

    function multiplicar ($num1, $num2){
        $resultado= $num1 * $num2;
        return $resultado;
    }

    //permite ingresar numeros decimales y dar resultados con decimales
    function dividirConDecimales ($num1, $num2){
        $resultado = $num1 / $num2;
        return $resultado;
    }

    //intercambia los numeros para iempre dividir el mayor por el menor, dando asi un resultado entero
    function dividirconResultadoEntero ($num1, $num2){
        if ($num1>$num2){
            $resultado = $num1 / $num2;
        } else{
            $resultado = $num2 / $num1;
        }
        return $resultado;
    }

    //Pruebas
    $mostrar= multiplicar(10,10);
    echo $mostrar."<br>";

    $mostrar= dividir(10,2);
    echo $mostrar."<br>";

    $mostrar= dividir(2.4,10.8);
    echo $mostrar;
    
    
    // >>> EJERCICIO 4 <<< //

    $array = [ 
        1 => "first value", 
        "1" => "second value", 
        1.2 => "tirth value", 
        true => "fourth value", 
        1+0.2 => "fifth value", 
        false !== null => "sixth value"
    ];

    $cantidadElementos= count($array);
    echo "Tiene: " . $cantidadElementos . " elementos";
    var_dump($array);
    echo "<br>"."<br>";
    echo "Su contenido es: <br>";
    print_r($array);

    
    
    // >>> EJERCICIO 5 <<< //

    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    // A //
    function totalMayores ($array){
        $total=0;
        foreach ($array as $key => $value){
            if($value['age']>=18){
                $total++;
            }
        }
        return $total;
    }
    
    $mostrar= totalMayores($people);
    echo $mostrar."<br>";
    
    
    // B
    function totalMujeresMenores ($array){
        $total=0;
        foreach($array as $key => $value){
            if($value['age']<18){
                if($value['sex']=='f'){
                    $total++;
                }
            }
        }
        return $total;
    }
    $rta= totalMujeresMenores($people);
    echo $rta."<br>";
?>
    
    
    <!DOCTYPE html> <!-- C -->
    <html>
        <table border=1>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Genero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $key => $persona) { ?>
                    <tr>
                        <?php foreach ($persona as $k => $dato) { ?>
                            <td> <?php echo $dato; ?></td>
                        <?php } ?>
                    </tr>  
                <?php } ?>
            </tbody>
        </table>
    </html>
    
    
<?php  // D //
    function pasarAArregloDeEdades ($arrayIngresado) {
    $arregloEdades = array();
        foreach ($arrayIngresado as $key => $person) {
            if(array_key_exists("age",$person)){
                $arregloEdades[]= $person["age"];
            }
        }
        return $arregloEdades;
    }

    $arregloEdades= pasarAArregloDeEdades($people);
    print_r($arregloEdades);

    // >>> EJERCICIO 6 <<< //
    echo "El día de la semana es: ".date("l");

    function imprimirDia (){
        $dia= date("N");
        if($dia>0 || $dia<5){
            echo "Es día de semana, y es:". date("l");
        } else{
            echo "es fin de semana, y es:". date("l");
        }
    }

    imprimirDia();
 

    // >>> EJERCICIO 7 <<< //
    function mostrarEnvios ($total_sale, $type_sale){
        if ($total_sale<200){ //caso 1
         if ($type_sale == "mascotas"){
            echo "No se puede realizar el envio";
         }
            if ($type_sale == "ropa"){
            echo "Los gastos del envio son 80 pesos";
         }
        }
        if ($total_sale>200 && $total_sale<600){
          echo "Los gastos de envio son 80 pesos";
        }
        if ($total_sale>600){
          echo "Los gastos de envio son gratis";
        }
        if ($total_sale>2000){
          echo "Codigo de descuento: CODEDESC33";
        }
    }

    mostrarEnvios(60, "mascotas");
    echo "<br>";
    mostrarEnvios (650, "ropa");

    
    // >>> EJERCICIO 8 <<< //
    
    function definirMayor ($a, $b, $c, $d){
        if ($a>$b && $a>$c && $a>$d) {
            echo $a . " es el mayor";
        } else if ($b>$a && $b>$c && $b>$d) {
            echo $b . " es el mayor";
        } else if ( $c>$a && $c>$b && $c>$d ) {
            echo $c . " es el mayor";
        } else {
            echo $d . " es el mayor";
        }
    }

    definirMayor (8,5,19,3);
  
?>

<!DOCTYPE html> <!-- 9 -->
<html>
    
    <form action="tablaFormada.php" method="post">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required>
    
    <br><br>
    
    <label for="Age">Age: </label>
    <input type="number" id="age" name="age" required>
    
    <br><br>
    
    <label>Sex:</label>
            <input type="radio" id="m" name="sex" value="m">
            <label for="m">M</label>
            <input type="radio" id="f" name="sex" value="f">
            <label for="f">F</label>
    
    <br><br>

    <button type="submit">Enviar</button>
    
    </form>

</html>


