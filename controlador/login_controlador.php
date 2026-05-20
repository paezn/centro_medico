<?php
    require_once (__DIR__.'/../modelo/usuario_modelo.php');

    // mostrar formulario
    function mostrar_login()
    {
        require_once (__DIR__.'/../vista/login_vista.php');
    }

    // Procesar credenciales
    function autenticar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $login = $_POST['login'];
            $pass = $_POST['password'];

            $usuario = validar_usuario($login, $pass);

            if($usuario)
            {
                //header("Location: index_.php");
                echo '<br>Credenciales correctas';
            }
            else
            {
                echo 'Credenciales incorrectas';
            }
        }
    }
?>