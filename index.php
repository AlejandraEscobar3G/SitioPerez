<?php
    $errores = '';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

=======
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
        if(!$errores) {
            foreach ($emails as $correo) {
                $enviar_a = $correo;
                $asunto = $options;
                $msj_preparado = "De: $name \n";
                $msj_preparado .= "Correo: $email \n";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $msj_preparado .= "Mensaje: $msg";
                if (!mail($enviar_a, $asunto, $msj_preparado))
                    $errores .= 'Ocurrio un error al enviar tu mensaje, intentalo de nuevo.'; 
            }
            $enviado = 1;
=======
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
                $msj_preparado .= "Mensaje: " . $msg;

                mail($enviar_a, $asunto, $msj_preparado);
            }
            $enviado = 'true';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
=======
>>>>>>> f4ccd7ec84fc8ce53e9c1aea5806d884059c0099
        }
    }
    require 'index.view.php';
?>