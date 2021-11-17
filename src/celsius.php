<?php


//-  Celsius is 273 degrees less than Kelvin
//fahrenheit -> celsius * (9/5) + 32

//console.log("The temperature is " + XX + " degrees Fahrenheit."
//console.log("The temperature is " + kelvin + " degrees Kelvin."

$celsiusDegrees = 30;

$kelvinDegrees = $celsiusDegrees + 273;

$fahrenheitDegrees = $celsiusDegrees * (9/5) + 32;


//echo("The temperature is " . $fahrenheitDegrees . " degrees Fahrenheit.");

echo "The temperature is $kelvinDegrees degrees Kelvin.";


//const celsiusDegrees = 30;

//const kelvinDegrees = celsiusDegrees + 273;

//const fahrenheitDegrees = celsiusDegrees * (9/5) + 32;

//console.log("The temperature is " + fahrenheitDegrees + " degrees Fahrenheit.");

//console.log("The temperature is " + kelvinDegrees + " degrees Kelvin.")

$data1 = "the color is";
$data2 = "red";
$result = "{$data1} {$data2}";
echo $result;


//echo = per printar per consola a php (console.log)
//Per correr el programa li hem de donar a DebugPHP per ferlo correr a la terminal (adalt dreta triangle amb cercle)
//Per concatenar variables podem utilitzar . (punts) o directament ficar la variable amb $
//Composer.json es on defineixo les meves dependencies i quines versions tinc descarregades
//Composer.lock s'auto genera a partir del composer json i es una vista més detallada de les llibreries instalades
//Per fer saber al visual que treballem amb PHP hem de posar <?php
//Per instal·lar llibreries hem de fer correr a la terminal composer i
//Utilitzar plantilla per composer.json