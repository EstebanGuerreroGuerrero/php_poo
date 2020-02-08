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

//ESTRUCTURA DE CONEXION -------------------------------------------------------------------------------------------------------------------------
    // DATOS PRINCIPALES DE CONEXION  ------------------------ ADVERTENCIA: Todos estos datos van en otro archivo php y posteriorimente se llaman con include.
    $db_host = "localhost"; 
    $db_nombre = "test";
    $db_usuario = "root";
    $db_contra = "";

    // variable que REALIZA  la conexion
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);



//AYUDAS EXTRAS PARA MANEJAR POSIBLES ERRORES ------------------------------------------------------------------------------------------------------
    //Para avisarnos si LA CONSULTA tuvo un error
    if(mysqli_connect_errno()){
        echo "Fallo al conectar la BD";
        exit();
    }

    //Examina si el nombre de la BD es correcto. ¡IMPORTANTE!: Para ello debemos quitar el paramentro $db_nombre de la variable $conexion..
    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");

    //Para que los resultados admitan caracteres latinos
    mysqli_set_charset($conexion, "utf8");


//USO DE LA CONEXION Y MANEJO DE DATOS DE LA BD -----------------------------------------------------------------------------------------------------
    // Realiza una consulta
    $consulta = "SELECT * FROM datospersonales";
    // Resulset = tabla virtual que coontiene los datos preguntados
    $resultados = mysqli_query($conexion, $consulta);


    //BUCLE PARA LA IMPRESION DE CADA REGISTRO
        //Mientras la variable $resultados haya obtenido algo, imprimir la cantidad de registros que tomo de la BD
    while (($fila = mysqli_fetch_row($resultados)) == true){
    // Mira fila a fila lo que hay en la tabla que esta en la variavle $resultados creando un array
    
    //En este caso muestra:
        //Rut
            echo $fila[0] . "<br>";
        //Nombre
            echo $fila[1] . "<br>";
        //Apellido
            echo $fila[2] . "<br>";
        //Edad
            echo $fila[3] . "<br>";
        
        echo "<br>";
    }



    //Cerrar la BD ---------------------------------------------------------------------------------------------------------------------------------
    mysqli_close($conexion);

?>
</body>
</html>