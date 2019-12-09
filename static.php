<?php

    class Compra_vehiculo {

        private $precio_base;
        static $ayuda = 4500; // static = Objeto o variable compartida por cualquier instancia
        private static $desc_tienda = 0;

        function __construct ($gama) {

            if ($gama ==  "urbano") {

                $this -> precio_base = 10000;
            }

            if ($gama ==  "compacto") {

                $this -> precio_base = 20000;
            }

            if ($gama == "barlina") {

                $this -> precio_base = 30000;
            }

        } // FIN del constructor


        function climatizador () {

            $this -> precio_base += 2000; // Si quiere climatizador se suman 2000
        }

        function navegador_gps () {

            $this -> precio_base += 2500;
        }

        function tapiceria_cuero ($color) {

            if ($color == "blanco") {

                $this -> precio_base += 3000;

            } else if ($color == "beige") {

                $this -> precio_base += 5000;

            }
        } // FIN tapiceria

        // TAMBIEN podemos crear funciones estaticas que modifiquen u operen variables estaticas (o cualquier otra) de la clase 
        static function descuento_tienda () {

            // ATENCIONN !!! Para jugar con fechas la SINTAXIS es de asi
            if (date("m-d-y")>"06-09-19") {  // Si la fecha corresponde a despues del 9 de junio del 2019 entonces se aplica el descuento

            self :: $desc_tienda = 4500; // en caso de ser llamado se aplicara el descuento y este valor reemplazara al valor real de la variable global.

            }
        }

        function precio_final () {

            $valor_final = $this -> precio_base - self::$ayuda - self :: $desc_tienda; // PAra referenciar a una variable static se utiliza el self::

            return $valor_final;
        } // FIN precio final


    } 


?>