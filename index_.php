<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Médico Saludables</title>
</head>
<body>
    <h1>Centro Médico Saludables</h1>
    <h2>Néstor Jesús Páez Sarmiento</h2>
    <!--Script php para mostrar formulario de inicio de sesión-->
    <?php
        //echo '<br>Mostrando formulario para inicio de sesión...';
        
        //Enrutador principal
        require_once 'controlador/login_controlador.php';

        // capturar acción solicitada
       $accion = isset($_GET['m'])?$_GET['m']:'mostrar_login';

       // Ejecutar accion del controlador si existe
       if(function_exists($accion))
       {
            $accion();
       }
       else
       {
           mostrar_login();//accion por defecto
           echo 'hola';
       }
    ?>
</body>
</html>