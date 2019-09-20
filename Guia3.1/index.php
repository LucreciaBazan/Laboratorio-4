<?php

$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';


// >>>>> Ejercicio 1 <<<<< //

// A //
$nombre= explode(',', $name);
print_r($nombre);
echo "<br>";

// B //
sort($nombre);
print_r($nombre);
echo "<br>";

// C //
$nombreString= implode(' ', $nombre);
$newArray= explode (' ',ucwords($nombreString));
print_r($newArray);
echo "<br>";

// D //
$total= count($newArray);
$arrayEnteros= array(14,27,36,45,52,68);
$totalArrEnteros= count($arrayEnteros);
$arrayAssociative= array_combine($newArray, $arrayEnteros);

// E //
print_r($arrayAssociative);



// >>>>> Ejercicio 2 <<<<< //
function existeOnoElValor ($array, $valor){
    if (in_array($valor, $array)){
        echo "<br>"."El valor se encuentra en el arreglo";
    }
    else {
         echo "<br>"."El valor no se encuentra en el arreglo";
    }
}
existeOnoElValor ($arrayAssociative, 45);
existeOnoElValor ($arrayAssociative, 12);




// >>>>> Ejercicio 3 <<<<< //
function existeOnoElValor ($array, $key){
    if (array_key_exists($key, $array)){
        echo $array[$key];
        echo "<br>";
    } else {
        echo "La clave no existe en este arreglo" . "<br>";
    }
}

existeOnoElValor($arrayAssociative, "Juan");
existeOnoElValor($arrayAssociative, "Lucrecia");




// >>>>> Ejercicio 4 <<<<< //
function pasarClavesaString ($array){
    $newArray = array_keys($array);
    $StringKey = implode (",", $newArray);
    return $StringKey;
}

$StringKeys= pasarClavesaString ($arrayAssociative);
echo $StringKeys . "<br>";

?>