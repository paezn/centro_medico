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

            echo '<br> login capturado en controlador: '.$login;
            echo '<br> password capturado en controlador: '.$pass;

            $usuario = validar_usuario($login, $pass);

            // imprimir array_asociativo $usuario
            echo '<br><br>Array asociativo:<br><br>';
            foreach ($usuario as $clave => $valor) 
            {
                echo $clave . ": " . $valor . "<br>";
            }

            echo "<pre>";
                print_r($usuario);
            echo "</pre>";

            // estos son el mismo dato
            echo '<br><br>'.$usuario[0];
            echo '<br><br>'.$usuario['login_usuario'];

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