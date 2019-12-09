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

    class Coche {

        // public: Para decir que cualquier parte del codigo puede acceder a estas variables.
        // private: Para acceder a estas variables solamente en esta clase.
        // protected: Para que las clases hijo tambien puedan acceder a estas variables.
        var $ruedas;
        var $color;
        var $motor;

        // La clase debe SIEMPRE partir de un ESTADO INICIAL. Para definir con que caracteristicas empezara esta clase se hace un CONSTRUCTOR al inicio de la clase.
        // Ejemplo coche: apagado, sin arrancar, frio, etc etc etc.
        function __construct () { // Metodo Constructor: __construct nueva forma de hacer un constructor.

            // Caracteristicas iniciales de la clase. Definiendo el valor de las variables definidas fuera del constructor.
            $this -> ruedas = 4; // this: es como decir "coche". Estamos diciendo que la clase partira con 4 ruedas inicialmente.
            $this -> color = "";
            $this -> motor = 1600;
        }

        // Para especificar QUE HARA el coche o clase, lo hacemos con una funcion. La cual dentro de la clase, se le llammara METODO.
        function arrancar () {

            echo "Estoy arrancan2 <br>";

        }

        function girar () {

            echo "Estoy giran2 <br>";

        }

        function frenar () {

            echo "Estoy frenan2 <br>";

        }

        // Funcion con parametros, utilizada para darle un valor a una variable de la clase de manera dinamica. El valor del parametro sera definido en la llamada del metodo como ya sabemos.
        function establece_color ($colordelcoche, $nombre_coche) {

            $this -> color = $colordelcoche; // Estamos asignando el valor del parametro a la propiedad color DE LA CLASE.
            
            echo "El color de " . $nombre_coche . " es: " . $this -> color;

        }


    }


     // HERENCIA -------------------------------------------------------------------

     class Camion extends Coche { // PUEDE ACCEDER A LOS METODOS Y VARIABLES DE LA CLASE COCHE

        function __construct () {

            $this -> ruedas = 8;
            $this -> color = "gris";
            $this -> motor = 1600;

        }

        // Si no queremos heredar una funcion de la clase padre lo que tenemos que hacer es SOBREESCRIBIR la funcion:

        function establece_color ($color_camion, $nombre_camion) {

            $this -> color = $color_camion;

            echo "El color del camion es " . $this -> color . "<br>";

        }

        function arrancar (){

            parent :: arrancar (); // Ejecuta por completo la funcion señalada. Se utiliza para agregarles mas cosas a dicha funcion para la clase HIJO.

            echo "Camion arranca2"; 

        }

        

    }

    








?>



</body>
</html>