<?php

echo("Clase 4 bucles,Arreglos y funciones");
echo("<br>");
echo("<br>");


// array indexado : son los que php asigna el nombre o identificador
$arreglo=array("juan","pedro","jose","carolina","alejandra");
echo("<br>");
echo("Array Indexado");
echo("<br>");
print_r($arreglo);
echo("<br>........................................................................................................");


//array asociativo: son los que el programador asigna el nombre o identificador
$usuarios=array('user1'=>"juan",
                'user2'=>"pedro",
                'user3'=>"jose",
                'user4'=>"carolina",
                'user5'=>"alejandra");
echo("<br>");
echo("Array Asociativo");
echo("<br>");
print_r($usuarios);
echo("<br>........................................................................................................");
echo("<br>");

//tamaño de arreglos
$tamano=count($usuarios);
echo("Contar la cantidad de campos de un array");
echo("<br>");
echo("El tamaño de mi array es: ".$tamano);
echo("<br>........................................................................................................");
echo("<br>");

//bucles For

echo("Bucle FOR");
echo("<br>");
echo("<br>");
for($centinela=0; $centinela<=10; $centinela++) {
    print("El valor de centinela es: ".$centinela."<br>");
}
echo("........................................................................................................");
echo("<br>");

//bucle for para recorrer Arreglos
echo("Bucle FOR para leer arreglos indexados");
echo("<br>");
echo("<br>");
$arreglo=array("Juan","Pedro","Jose","Carolina","Alejandra");
for($centinela=0; $centinela<(count($arreglo)); $centinela++) {
    echo("El valor del arreglo en la posicion: ".$centinela." es: ".$arreglo[$centinela]."<br>");
}
echo("........................................................................................................");
echo("<br>");

// Bucle foreach leer arreglos asociativos e indexados
echo("Bucle FOREACH para leer arreglos asociativos");
echo("<br>");
echo("<br>");
$usuarios=array('user1'=>"juan",
                'user2'=>"pedro",
                'user3'=>"jose",
                'user4'=>"carolina",
                'user5'=>"alejandra");

foreach($usuarios as $clave=>$valor) {
    echo("El valor del arreglo en la Clave: ".$clave." es: ".$valor."<br>");
}
echo("........................................................................................................");
echo("<br>");

// Bucle foreach leer arreglos indexados
echo("Bucle FOREACH para leer arreglos indexados");
echo("<br>");
echo("<br>");
$arreglo=array("Juan","Pedro","Jose","Carolina","Alejandra");
foreach($arreglo as $clave=>$valor) {
    echo("El valor del arreglo es: ".$valor."<br>");
    echo("El valor del arreglo en la Clave: ".$clave." es: ".$valor."<br>"."<br>");
}

// Arreglos Multidimensionales (Arrreglo de arreglos - matrices)
echo("Arreglos multidimencionales");
echo("<br>");
echo("<br>");
$clientes=array(
    'cliente1'=>array('nombre'=>"carlos",'edad'=>15,'sexo'=>"M"),
    'cliente2'=>array('nombre'=>"jose",'edad'=>25,'sexo'=>"M"),
    'cliente3'=>array('nombre'=>"maria",'edad'=>30,'sexo'=>"f"),
    'cliente3'=>array('nombre'=>"sandra",'edad'=>32,'sexo'=>"f")
);
echo("<br>");
print_r($clientes);

foreach($clientes as $clave=>$valor) {
    echo("la calve del arreglo es: ");
    print_r($clave);
}

?>