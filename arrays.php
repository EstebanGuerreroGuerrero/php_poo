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

//Metodo 1-----------------------------------------------------------------------------------
$semana [] = "Lunes";
$semana [] = "Martes";
$semana [] = "Miercoles";
$semana [] = "Jueves";

echo $semana[2];

//Bucle para recorrer el array normal
for ($i = 0; $i <count($semana); $i++){
    echo $semana[$i] . "<br>";
}


//Metodo 2: ARRAY INDEXADO--------------------------------------------------------------------
    $meses=array("Enero", "Febrero", "Abril");

    echo $meses[1];

//Metodo 3: ARRAY ASOCIATIVO= Asociamos cada posicion con un nombre-----------------------------------------

    $datos = array ("Nombre"=>"Juan", "Apellido"=>"Guerrero", "Edad"=>21);

    echo $datos ["Apellido"];

            //Si queremos AGREGAR un nuevo elemento al array ASOCIATIVO
    $datos["Pais"]="Chile";



    //Bucle para recorrer un array asociativo
    foreach($datos as $clave=>$valor){
                //Explicacion: $clave es una variable que nos inventamos para llamar a las variables y $valor es otra variable inventada para llamar al contenido de las variables
        echo "A $clave le corresponde $valor <br>";
    }




//AYUDAS: Existe una funcion para saber si una variable es un array o no-----------------
    if(is_array($datos)){
        echo "Es un array";
    }else{
        echo "No es un array";
    }

// ARRAY DE 2 DIMENSIONES -------------------------------------------------------------------------------------------------------------------------------

$alimentos = array("fruta" => array("tropical" => "kiwi",
                                    "citrico" => "mandarina",
                                    "otros" => "manzana"),

                   "leche" => array("animal" => "vaca",
                                    "vegetal"=> "coco"), 

                   "carne" => array("vacuno" => "lomo",
                                    "porcino" => "pata"));
    
    echo $alimentos["carne"]["vacuno"]; // queremos MOSTRAR "lomo"



//¿Como recorrer un array de 2 dimensiones?

foreach ($alimentos as $clave_alim => $alim){
    echo "$clave_alim: <br>";

    while(list($clave, $valor) = each($alim)){  //OJO CON: each
                //EXPLICACION: Esto dice que por cada $alim: elemento del array2, lo desdoble en su clave y valor. En otras palabras en su categoria y contenido
        echo "$clave = $valor <br>";
    }

    echo "<br>";
}

//AYUDAA!: Existe una funcion que hace lo mismo, muestra el contenido de un array multidimensional mas facil
echo var_dump($alimentos);


?>
</body>
</html>