<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    include ("static.php");

    // Para acceder a una variable u objeto de caracter STATIC es de la siguiente forma
    Compra_vehiculo :: $ayuda = 10000;
        // Llamado de una funcion estatica de la clase
    Compra_vehiculo :: descuento_tienda (); 
        // Con esto conseguimos que si tenemos 20 compradores este descuento se aplicara para los 20 sin tener que restarlo 1 por 1
    // --------------------------------

    // COMPRA DEL PRIMER CLIENTE
    $compra_Esteban = new Compra_vehiculo ("compacto"); // Se instancia la clase a un cliente escogiendo una opcion del constructor

    $compra_Esteban -> climatizador(); // Se llama una funcion
    $compra_Esteban -> tapiceria_cuero ("blanco"); // Se llama otra funcion

    echo $compra_Esteban -> precio_final () . "<br>"; // Se muestra el resultado final


    // COMPRA DE UN SEGUNDO CLIENTE
    $compra_Khas = new Compra_vehiculo ("urbano");

    $compra_Khas -> climatizador();
    $compra_Khas -> navegador_gps();
    $compra_Khas -> tapiceria_cuero("beige");

    echo $compra_Khas -> precio_final () . "<br>";


?>
</body>
</html>