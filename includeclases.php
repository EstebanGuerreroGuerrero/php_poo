<?php

    include ("clases.php");

   // Instanciamos clases para crear varios objetos distintos con los mismos atributos

   $nissan = new Coche (); // Estado inicial al objeto o instancia, referenciando al Constructor: new Coche ();

   $opel = new Coche (); // Estado inicial al objeto o instancia, referenciando al Constructor: new Coche ();

   $suzuki = new Coche (); // Estado inicial al objeto o instancia, referenciando al Constructor: new Coche ();

   $pegaso = new Camion ();
   

   // UTILIZACION de las funciones---------------------------------------------------

    // Queremos hacer que nuestro auto Nissan gire? hacemos lo siguiente:
    $nissan -> girar ();

     // Cuantas ruedas tiene ?
    echo $nissan -> ruedas;   

// UTILIZACION de las funciones con parametros

    $opel -> establece_color ("Rojo", "opel");

    
// UTILIZACION de la clase HIJO

    echo "El pegaso tiene " . $pegaso -> ruedas . " ruedas <br>";

    $pegaso -> frenar ();
    $pegaso -> establece_color ("Dorado", "pegaso");
    $pegaso -> arrancar (); // Ejecutara el metodo arrancar de la clase CHOCHE y ademas ejecutara lo que agregamos a la clase frenar de la clase CAMION (hijo).
    


?>