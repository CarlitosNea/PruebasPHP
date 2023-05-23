<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

class Persona{
    var $lista = array();
    var $documento;
    var $nombre;
    var $edad;

    function __construct($documento,$nombre,$edad){
        $this->documento = $documento;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function agregarPersona($persona) {
        $this->lista[] = $persona;
    }

    function mostrarPersonas(){
        foreach ($this->lista as $persona) {
            echo "Documento: " . $persona->documento . "<br>";
            echo "Nombre: " . $persona->nombre . "<br>";
            echo "Edad: " . $persona->edad . "<br><br>";
        }
    }

}

$personas = array();

$persona1 = array();
array_push($persona1, "1001", "carlos", 19);
$personas[] = $persona1;

$persona2 = array();
array_push($persona2, "1002", "julian", 9);
$personas[] = $persona2;

$persona3 = array();
array_push($persona3, "1003", "juanita", 20);
$personas[] = $persona3;

/* // Mostrar los datos de la lista de personas
foreach ($personas as $persona) {
    echo "Documento: " . $persona[0] . "<br>";
    echo "Nombre: " . $persona[1] . "<br>";
    echo "Edad: " . $persona[2] . "<br><br>";
}

$documentoBuscado = "1002"; // Documento que deseas buscar

// Buscar el documento en la lista de personas
foreach ($personas as $persona) {
    if ($persona[0] == $documentoBuscado) {
        echo "Documento: " . $persona[0] . "<br>";
        echo "Nombre: " . $persona[1] . "<br>";
        echo "Edad: " . $persona[2] . "<br><br>";
        break; // Terminar el bucle después de encontrar la persona
    }
} */

/* $documentoActualizar = "1002"; // Documento que deseas buscar
foreach ($personas as &$p) {
    if ($p[0] == $documentoActualizar) {
        $p[1] = "peye";
        $p[2] = 30; // Nueva edad
        break; // Terminar el bucle después de actualizar la persona
    }
} */

$documentoEliminar = "1002"; // Documento de la persona a eliminar

// Buscar la persona en la lista y eliminarla
foreach ($personas as $indice => $persona) {
    if ($persona[0] == $documentoEliminar) {
        unset($personas[$indice]);
        break; // Terminar el bucle después de eliminar la persona
    }
}

// Reindexar el arreglo de personas
$personas = array_values($personas);


foreach ($personas as $persona) {
    echo "Documento: " . $persona[0] . "<br>";
    echo "Nombre: " . $persona[1] . "<br>";
    echo "Edad: " . $persona[2] . "<br><br>";
}







?>
</body>
</html>