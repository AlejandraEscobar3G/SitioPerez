<?php
    $errores = '';
    $enviado = '';

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $options = $_POST['options'];
        $msg = $_POST['message'];

        if(!empty($name)) {
            $name = trim($name);
            $name = filter_var($name, FILTER_SANITIZE_STRING);
        } else {
            $errores .= 'Por favor ingresa un nombre </br>';
        }
        if(!empty($email)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores .= 'Por favor ingresa un correo válido </br>';
            } 
        } else {
            $errores .= 'Por favor ingresa un correo </br>';
        }
        if(!empty($options)) {
            if($options == 'Facturacion') {
                $emails = array('jocelyn.ramirez@corporativoperez.com', 'cristian.navarro@corporativoperez.com', 'iris.valencia@corporativoperez.com');
            }
            if($options == 'Calidad') {
                $emails = array('hugo.rojas@corporativoperez.com');
            }
            if($options == 'Servicios') {
                $emails = array('marco.perez@corporativoperez.com', 'rosario.gonzalez@corporativoperez.com');
            }
            if($options == 'Logistica') {
                $emails = array('juan.saucedo@corporativoperez.com', 'edgar.perez@corporativoperez.com');
            }
        } else {
            $errores .= 'Por favor ingresa un asunto </br>';
        }
        if(!empty($msg)) {
            $msg = htmlspecialchars($msg);
            $msg = trim($msg);
            $msg = stripslashes($msg);
        } else {
            $errores .= 'Por favor ingresa el mensaje </br>';
        }
        if(!$errores) {
            foreach ($emails as $correo) {
                $enviar_a = $correo;
                $asunto = $options;
                $msj_preparado = "De: $name \n";
                $msj_preparado .= "Correo: $email \n";
                $msj_preparado .= "Mensaje: " . $msg;

                mail($enviar_a, $asunto, $msj_preparado);
            }
            $enviado = 'true';
        }
    }
    require 'index.view.php';
?>