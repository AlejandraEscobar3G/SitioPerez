<?php
    $errores = '';
    $enviado = 0;
    function sanitizar($data, $tipo = 'string'){
        if ($tipo == 'string') filter_var($data, FILTER_SANITIZE_STRING);
        else if($tipo == 'email') filter_var($data, FILTER_SANITIZE_EMAIL);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['submit'])) {
        $name = sanitizar($_POST['name']);
        $email = sanitizar($_POST['email'], 'email');
        $options = sanitizar($_POST['options']);
        $msg = sanitizar($_POST['message']);

        $errores .= (empty($name)) ? 'Por favor ingresa un nombre <br>' : '';
        $errores .= (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Por favor ingresa un correo válido </br>' : '';

        if($options == 'Facturacion') 
            $emails = array('jocelyn.ramirez@corporativoperez.com', 'cristian.navarro@corporativoperez.com', 'iris.valencia@corporativoperez.com');
        else if($options == 'Calidad')
            $emails = array('hugo.rojas@corporativoperez.com');
        else if($options == 'Servicios')
            $emails = array('marco.perez@corporativoperez.com', 'rosario.gonzalez@corporativoperez.com');
        else if($options == 'Logistica')
            $emails = array('juan.saucedo@corporativoperez.com', 'edgar.perez@corporativoperez.com');
        else 
            $errores .= 'Por favor ingresa un asunto </br>';

        $errores .= (empty($msg)) ? 'Por favor ingresa el mensaje </br>' : '';

        if(!$errores) {
            foreach ($emails as $correo) {
                $enviar_a = $correo;
                $asunto = $options;
                $msj_preparado = "De: $name \n";
                $msj_preparado .= "Correo: $email \n";
                $msj_preparado .= "Mensaje: $msg";
                if (!mail($enviar_a, $asunto, $msj_preparado))
                    $errores .= 'Ocurrio un error al enviar tu mensaje, intentalo de nuevo.'; 
            }
            $enviado = 1;
        }
    }
    require 'index.view.php';
?>