<style></style>
<?php
    if (isset($_POST["enviar"])) {
        $usuario_inp=$_POST["nombre_inp"];
        $edad_inp=$_POST["edad_inp"];
        if ($edad_inp >= 18) {
            echo "Bienvenido $usuario_inp";
        }else {
            echo "no puede pasar, edad: $edad_inp";
        }
        
    }
?>