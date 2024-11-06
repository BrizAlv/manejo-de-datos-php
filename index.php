<?php

//valores
/*
function greet($name)
{
    return "Hola, $name";
}

echo greet('Jazmin');
*/
/*
//referencias
$course="PHP";
function path($course)
{
    $course="Laravel";
    echo $course;//laravel
}
path($course);
echo $course; //laravel
//predeterminado 
function greet($name="Jazmin")
{
    return "Hola, $name";
}

echo greet(); //Hola, Jazmin
echo greet('Italo'); //Modifica el valor de name e imprime el nuevo valor de la variable name
*/
//return
/*function greet()
{
    return "Hola...";
}

echo greet();//no devuelve nada despues de Hola... porque el valor de greet no esta definido
*/

/*
/closure - funciones anonimas 
$greet = function ($name)//variable que requiere logica
{
    return "Hola, $name";
};
echo $greet('Jazmin');
*/
/*

function greet(Closure $lang, $name)
{
    return $lang($name);
}
$es = function ($name)
{
    return "Hola, $name";
};
$en = function ($name)
{
    return "Hello, $name";
};
echo greet($en, 'Lynda');
*/

/* //array simple, es el que no se identifica de manera directa 
$courses = 
[
    'javascript', 
    'laravel', 
    'php', 
    'vuejs'
];

echo "<pre>";

var_dump($courses);
*/

//array complejo
// $courses = 
// [
//     'frontend'    => 'javascript', 
//     'framework'   =>'laravel', 
//     'backend'     =>'php'
// ];
/* //forma 1 
foreach ($courses as $course => $value) 
{
    echo "$course <br>";
}
    */

/*//forma 2 

function upper($course)
{
    echo "$course <br>";
}
array_walk($courses, 'upper');
*/

//forma 3 
// function upper($course)
// {
//     echo strtoupper($course). "<br>";
// }
// array_walk($courses, 'upper');

//6-11-24 Funciones de PHP para arrays

// $courses = [
//   10 =>  'php', 
//   100 =>  'javascript', 
//   1000 =>  'laravel'
// ];

// ksort($courses);//ordena por llave al imprimir
// echo "<pre>";
// //var_dump($courses);
// var_dump(array_slice($courses, 1));//divide el array en arrays mas pequeños

//comparación de arrays
// $courses = ['javascript', 'php'];
// $switches = ['php', 'laravel', 'javascript', 'vuejs'];

// echo "<pre>";
//var_dump(array_diff($switches, $courses));//compara los arrays y muestra los valores que no se repiten
// $arrayA= [1, 2, 3, 4, 5];
// $arrayB= [3, 4, 5, 6, 7];

// var_dump(array_diff($arrayB, $arrayA));//compara los arrays y muestra los valores que no se repiten
$frontend = ['javascript'];
$backend = ['php', 'laravel'];

echo "<pre>";
//var_dump($frontend + $backend);//une los arrays y muestra los valores que no se repiten, hay que identificar con llaves distintas cada elemento
var_dump(array_merge($frontend, $backend));//une los arrays y muestra los valores que no se repiten sin conflicto por llaves de elementos duplicadas 