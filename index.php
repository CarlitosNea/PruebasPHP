<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color: red;
        }
    </style>
</head>
<body>
    
    <!-- print "Hola mundo <br>";

    $documento=1001;
    $nombre= "Carlos";

    print "hola $nombre<br>con documento ".$documento;
    print '<br>hola $nombre con documento <br>';

    echo $nombre,$documento;


    //include("otrophp.php");

    function damenombre($nombre_inp){

        $nombre_inp="Juan";
        $mensaje="el nombre es: ".$nombre_inp;
        return $mensaje;

    }


    echo "<br>".damenombre($nombre);


    echo "<p class='resaltar'>ejemplo de resaltar</p>";


    $variable1="casa";
    $variable2="CASA";
    //$resultado=strcmp($variable1,$variable2);
    $resultado=strcasecmp($variable1,$variable2);

    echo "el resultado es $resultado";
    if ($resultado) { //al retornar booleano se entiende que la condicion es true
        echo "no coinciden";
    }else{
        echo "coinciden";
    } -->


    

<form action="validacion.php" method="post" id="datos_usuario">
    <fieldset>
        <legend>formulario</legend>
        <p>Nombre</p>
        <input type="text" id="nombre_inp" name="nombre_inp">
        <p>Edad</p>
        <input type="number" id="edad_inp" name="edad_inp">
        <button type="submit" id="enviar" name="enviar">Enviar</button>   
    </fieldset>
</form>

<?php

    define("NOMBRE","carlos");
    echo "bienvenido ".NOMBRE;
    //CONSTANTES PREDEFINIDAS PHP
    //los input select option se comparan con el texto de la opcion almacenada con el name del select
    //funciones matematicas php

?>




</body>
</html>