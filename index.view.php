<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon"/>
    <title>TyL Pérez</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- menu -->
    <nav class="navbar fixed-top navbar-expand-sm" style="background: linear-gradient(180deg, #ACACAC, white);">
        <a class="pl-3 navbar-brand" href="#">
            <img src="img/icons/perez.png" class="logo-perez d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item buttons-menu">
                    <a class="nav-link" href="#">Empresa</a>
                </li>
                <li class="nav-item buttons-menu">
                    <a class="nav-link" href="#s-certificaciones">Certificaciones</a>
                </li>
                <li class="nav-item buttons-menu">
                    <a class="nav-link" href="#s-servicios">Servicios</a>
                </li>
                <li class="nav-item buttons-menu">
                    <a class="nav-link" href="#s-clientes">Clientes</a>
                </li>
                <li class="nav-item buttons-menu">
                    <a class="nav-link" href="#s-contacto">Contacto</a>
                </li>    
            </ul>
        </div>
        <a href="#s-contacto" id="presupuesto" class="position-absolute text-light d-none d-lg-block p-2"><small>Solicita tu presupuesto <b>DAR CLICK</b></small></a>
    </nav>
    <!-- slider -->
    <div class="carousel slide" data-ride="carousel" id="indicators">
        <ol class="carousel-indicators">
            <li data-target="#indicators" data-slide-to="0" class="active"></li>
            <li data-target="#indicators" data-slide-to="1"></li>
            <li data-target="#indicators" data-slide-to="2"></li>
            <li data-target="#indicators" data-slide-to="3"></li>
            <li data-target="#indicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <!-- slide 1 -->
            <div class="carousel-item active">
                <div class="position-relative">
                    <img class="d-block slider" src="img/inicio/slide1.jpg" alt="1 slide">
                </div>
            </div>
            <!-- slide 2 -->
            <div class="carousel-item">
                <div class="slider">
                    <div class="blue text-light container-fluid h-13">
                        <div class="row h-100">
                            <div class="col p-0">
                                <div class="w-100 h-100">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-fill h-100 position-relative" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link h-100 py-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>¿Quiénes somos?</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link h-100 py-4" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>Misión</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link h-100 py-4" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><b>Visión</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link h-100 py-4" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><b>Valores</b></a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content w-100 position-absolute">
                                        <div class="tab-pane field-blue p-3 text-light" id="home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae pariatur nobis, nisi doloremque quas eligendi asperiores quaerat placeat. Placeat distinctio eos incidunt! Iste laborum voluptatum omnis iure distinctio quam!</div>
                                        <div class="tab-pane field-blue p-3 text-light" id="profile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis delectus quam dolore quod ut rerum ad quaerat illo iusto reprehenderit facere asperiores aliquid sapiente, est omnis obcaecati. Quis, perspiciatis quo.</div>
                                        <div class="tab-pane field-blue p-3 text-light" id="messages">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo hic praesentium voluptates blanditiis odio, itaque voluptatibus facere iusto provident fugiat recusandae aliquam quisquam consequuntur! Facere maiores ullam repellendus. Alias, nam.</div>
                                        <div class="tab-pane field-blue p-3 text-light" id="settings">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque modi ex reiciendis pariatur molestiae porro blanditiis ullam animi error similique repellat, tempore quisquam dignissimos unde adipisci fuga ea obcaecati dolore!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid h-87 p-0">
                        <div class="row h-100">
                            <div class="col p-0">
                                <img class="d-block w-100 h-100" src="img/inicio/slide2.png" alt="2 slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 3 -->
            <div class="carousel-item">
                <div class="slider">
                    <div class="blue text-light container-fluid h-13">
                        <div class="row">
                            <div class="col">
                                <p class="title pt-4 pl-4">GPS</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid h-87 p-0">
                        <div class="row h-100">
                            <div class="col col-lg-8 p-0">
                                <img class="d-block w-100 h-100" src="img/inicio/slide3.png" alt="3 slide">
                            </div>
                            <div class="d-none d-lg-block d-xl-block col-lg-4 align-self-center">
                                <div class="pl-1 pr-4 py-2">
                                    <ul class="check-blue font-blue">
                                        <li>Sistema de rastreo satelital las 24 horas, en todas las unidades.</li>
                                        <li>Localización en tiempo real.</li>
                                        <li>Cuentas espejo para nuestros socios comerciales.</li>
                                        <li>Control de velocidad.</li>
                                        <li>Paro y bloqueo de motor.</li>
                                        <li>Reportes dinámicos a nuestros clientes.</li>
                                        <li>Geocercas y protocolos de seguridad.</li>
                                        <li>Web Service.</li>
                                        <li>En nuestras instalaciones contamos con circuito cerrado de televisión, seguridad privada y malla electrificada en toda la periferia de las oficinas y patio de maniobras.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 4 -->
            <div class="carousel-item">
                <div class="slider">
                    <div class="blue text-light container-fluid h-20">
                        <div class="row">
                            <div class="col">
                                <p class="title pt-4 pl-4 mb-0">AUTOPROTECCIÓN</p>
                                <p class="pl-4 pt-1 responsive-font">Capacidad, experiencia y equipo necesarios para transportar de forma segura y eficiente productos químicos, agroquímicos y materiales peligrosos en vehículos terrestres.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid h-80 p-0">   
                        <div class="row h-100">
                            <div class="col p-0">
                                <img class="d-block w-100 h-100" id="slide-autoproteccion" src="img/inicio/slide4.png" alt="4 slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide 5 -->
            <div class="carousel-item">
                <div class="slider">
                    <div class="blue text-light container-fluid h-20">
                        <div class="row">
                            <div class="col">
                                <p class="title pt-4 pl-4 mb-0">MIEMBROS DE CANACAR Y PROCCYT</p>
                                <p class="pl-4 py-1 responsive-font">Reconocimiento por parte de PROCCYT por alcanzar los más altos estándares de calidad en transportación, noviembre 2004.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid p-0 h-80">
                        <div class="row h-100">
                            <img class="d-block w-100 h-100" src="img/inicio/slide5.jpg" alt="5 slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- certificaciones -->
    <div class="container-fluid px-0 fondo position-relative">
        <div id="s-certificaciones" class="block-hide py-5"></div>
        <div class="row no-gutters">
            <div class="col-12 attachment" id="certificaciones">
                <h2 class="p-4 section text-light text-center display-5 mb-0">CERTIFICACIONES</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <p class="col text-center p-5 mb-0">Se cumple con todas las disposiciones referentes a la reglamentación para el transporte terrestre de materiales y residuos peligrosos, de acuerdo al reglamento emitido por la SCT, y las normas oficiales correspondientes</p>
        </div>
        <div class="row no-gutters align-items-end">
            <div class="d-none d-sm-block col-sm-2"></div>
            <div class="col-6 col-sm-4">
                <img class="h-90 d-block float-right" src="img/certificaciones/aniq.png" alt="aniq">
            </div>
            <div class="col-6 col-sm-4">
                <img class="h-90 d-block float-left" src="img/certificaciones/integral.png" alt="integral">
            </div>
            <div class="d-none d-sm-block col-sm-2"></div>
        </div>
        <div class="row no-gutters align-items-center">
            <div class="d-none d-sm-block col-sm-2 col-md-4 p-3 ">
                <img class="h-90 d-block float-right" src="img/certificaciones/oea.png" alt="recurso">
            </div>
            <div class="col-12 col-sm-8 col-md-4 blue text-center p-3">
                <p class="text-light">Miembros del SETIQ ANIQ desde 2009</p>
                <p class="text-light">Certificación SARI Julio 2013</p>
                <p class="text-light">Certificado RCMX-009113-0613</p>
                <p class="text-light">Certificado NEEC 2017 (En proceso)</p>
                <p class="text-light">Certificación en "Responsabilidad integral" RCMX009113-0613</p>
            </div>
            <div class="d-none d-sm-block col-sm-2 col-md-4">
                <img class="h-90 d-block float-left" src="img/certificaciones/setiq.png" alt="setiq">
            </div>
        </div>
        <div class="row no-gutters align-items-start">
            <div class="d-none d-sm-block col-sm-2"></div>
            <div class="col-6 col-sm-4">
                <img class="float-right d-block h-90" src="img/certificaciones/neec.png" alt="neec">
            </div>
            <div class="col-6 col-sm-4">
                <img class="h-90 d-block float-left" src="img/certificaciones/recurso.jpg" alt="recurso">
            </div>
            <div class="d-none d-sm-block col-sm-2"></div>
        </div>
        <div class="row no-gutters pt-5">
            <div class="col-md-1 align-self-center"></div>
            <div class="col-12 col-md">
                <div class="h-100">
                    <p class="text-center display-5">PERMISOS</p>
                    <div class="p-4 text-left text-light blue text-justify">
                        <p class="p-2">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT (No-1512)</p>
                        <p class="p-2">Permiso para el transporte de residuos ante la SEMARNAT (DFMARNAT-3200-2017)</p>
                        <p class="p-2">Licencias tipo "E" de conductores de camión. Afiliación al seguro social a operadores.</p>
                        <p class="p-2">Autorización para la recolección y transporte de residuos peligrosos. (15-096-PS-I-54-2003)</p>
                        <p class="p-2">Tarjeta de circulación especificada para el transporte de materiales y residuos peligrosos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 align-self-center"></div>
            <div class="col-12 col-md">
                <div class="h-100">
                    <p class="text-center display-5">IDENTIFICACIÓN</p>
                    <div class="p-4 text-light blue text-justify">
                        <p class="p-2">Portarombos</p>
                        <p class="p-2">Datos de teléfono de emergencia</p>
                        <p class="p-2">Guía norteamericana de respuesta a emergencias</p>
                    </div>
                    <p class="text-center display-5">PÓLIZA GNP</p>
                    <div class="p-4 text-light blue text-justify">
                        <p class="p-2">Seguro ecológico</p>
                        <p class="p-2">Terceros</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 align-self-center"></div>
        </div>
    </div>
    <!-- servicios -->
    <div class="container-fluid px-0 fondo position-relative">
        <div id="s-servicios" class="block-hide py-5"></div>
        <div class="row no-gutters">
            <div class="col-12 attachment" id="servicios">
                <h2 class="p-4 section text-light text-center display-5 mb-0">SERVICIOS</h2>
            </div>
        </div>
        <div class="position-relative" id="services">
            <div class="row no-gutters">
                <p class="col text-center p-5 mb-0">Contamos con el equipo necesario para llevar tu producto a donde tu lo requieras.</p>
            </div>
            <div class="row no-gutters p-3">
                <div class="col-12 col-lg-4">
                    <div class="px-5">
                        <p class="text-center pb-4">
                            <span class="border-blue py-2 px-3 h3">SERVICIOS</span>
                        </p>
                        <div class="py-4">
                            <ul class="px-2 check">
                                <li> Servicios nacionales al interior de la República</li>
                                <li> Servicios de importación y exportación en puertos de Veracruz y Manzanillo. (Portacondenedores).</li>
                                <li> Cruce de frontera (Caja Seca).</li>
                                <li> Servicios Refrigerados</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row pb-4">
                        <div class="col">
                            <p class="text-center">
                                <span class="border-blue py-2 px-3 h3">FLOTILLA</span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <img class="mx-auto d-block" src="img/servicios/rabon35.png" id="vehiculo" alt="vehiculo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- clientes -->
    <div class="container-fluid px-0 fondo position-relative">
        <div id="s-clientes" class="block-hide py-5"></div>
        <div class="row no-gutters">
            <div class="col-12 attachment" id="clientes">
                <h2 class="p-4 section text-light text-center display-5 mb-0">CLIENTES</h2>
            </div>
        </div>
        <div class="row no-gutters justify-content-center">
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/dow.png" alt="dow">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/monsanto.png" alt="bayer">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/dupont.png" alt="dupont">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/comex.png" alt="covestro">
            </div>
            <div class="d-none d-sm-none d-md-block col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/agricultura.png" alt="dow">
            </div>
        </div>
        <div class="row no-gutters justify-content-center">
            <div class="d-none d-sm-none d-md-block col-md"></div>
            <div class="col-4 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/bayer.png" alt="monsanto">
            </div>
            <div class="col-4 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/basf.png" alt="basf">
            </div>
            <div class="col-4 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/covestro.png" alt="comex">
            </div>
            <div class="d-none d-sm-none d-md-block col-md"></div>
        </div>
        <div class="row no-gutters justify-content-center">
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/panalpina.png" alt="panalpina">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/walmart.png" alt="walmart">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/syngenta.png" alt="syngenta">
            </div>
            <div class="col-6 col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/chedraui.png" alt="chedraui">
            </div>
            <div class="d-none d-sm-none d-md-block col-md align-self-center p-4">
                <img class="clientes d-block mx-auto" src="img/clientes/pochteca.png" alt="pochteca">
            </div>
        </div>
    </div>
    <!-- contacto -->
    <div class="container-fluid px-0 fondo position-relative">
        <div id="s-contacto" class="block-hide py-5"></div>
        <div class="row no-gutters">
            <div class="col-12 attachment" id="contacto">
                <h2 class="p-4 section text-light text-center display-5 mb-0">CONTACTO</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <p class="col text-center p-5 mb-0">¿Requieres más información sobre nuestros servicios? <br>Pide un presupuesto sin ningún compromiso</p>
        </div>
        <div class="row no-gutters">
            <div class="col-12 col-md-6">
                <form class="p-4" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>#s-contacto">
                    <div class="form-group">
                        <label for="name">NOMBRE</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo" value="<?php if(!$enviado && isset($name)) echo $name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">CORREO ELECTRÓNICO</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="correo@example.com" value="<?php if(!$enviado && isset($email)) echo $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto">ASUNTO</label>
                        <select class="custom-select form-control" name="options" id="options" required>
                            <option value="" selected>Asunto</option>
                            <option value="Facturacion">Facturación</option>
                            <option value="Calidad">Calidad</option>
                            <option value="Servicios">Servicios</option>
                            <option value="Logistica">Logística</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">MENSAJE</label>
                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="¿Cómo le podemos ayudar?" value="<?php if(!$enviado && isset($msg)) echo $msg ?>" required></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" id="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
            <div class="col-12 col-md-6 p-3 position-relative" id="contact">
                <div class="row">
                    <div class="col">
                        <p class="p-2 text-justify"><b>DIRECCIÓN</b><br>Av. Juárez No. 17, Centro, Tequixquiac, C.P. 55650, Estado de México</p>
                        <br>
                        <p class="p-2"><b>TELÉFONOS</b> <br>(01 59) 19 12 08 03 <br>(01 59) 19 12 11 33</p>
                    </div>
                    <div class="col">
                        <p class="p-2 text-justify"><b>HORARIOS</b> <br>Lunes a viernes de 09:00 am - 06:30 pm <br>Sábados de 09:00 am - 1:00 pm</p>
                        <br>
                        <p class="p-2 text-justify"><b>EMAIL</b> <br>servicios@corporativoperez.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.4375063644284!2d-99.14337158582138!3d19.90596008661724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1862a14336243%3A0x4eb244b1303c732a!2sTransportadora+y+Log%C3%ADstica+Perez!5e0!3m2!1ses!2smx!4v1517908220856" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <?php if((empty($errores)) && ($enviado==1)): ?>
                    <div class="position-absolute square-contacto">
                        <p class="h1 text-justify p-5 text-secondary"><i>Gracias por su mensaje, <br> en breve nuestros ejecutivos se pondrán en contacto con usted.</i></p>
                        <button type="button" id="aceptar" class="btn btn-light d-block mx-auto btn-lg">Aceptar</button>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="container-fluid px-0 blue">
        <div class="row justify-content-between p-4 no-gutters">
            <div class="col-12 col-sm-6 footer-left"><a class="text-light"  data-toggle="modal" data-target="#avisoPrivacidad"><small>AVISO DE PRIVACIDAD</small></a></div>
            <div class="col-12 col-sm-6 footer-right"><a class="text-light" href="#"><small>IR ARRIBA</small></a></div>
            <!-- Modal -->
            <div class="modal fade" id="avisoPrivacidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title pl-4">Aviso de privacidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-justify py-4 px-5">
                            Este mensaje y documentos adjuntos, no generan ni constituyen acuerdos o vínculos jurídicos, contractuales o similares; no obligan a
                            TRANSPORTADORA Y LOGISTICA PEREZ, S.A. DE C.V., salvo manifestación expresa y por escrito. "Aviso de Confidencialidad".
                            La información contenida y/o adjunta es de uso exclusivo de los destinatarios y considerada como información confidencial, privilegiada y
                            protegida por las Leyes Aplicables. A ninguna persona ajena a dichos destinatarios se le autoriza cualquier clase de uso, divulgación,
                            intercepción o reproducción, parcial o total, de este mensaje y de la información que contiene y/o se adjunta. Si ha recibido este correo por
                            error le solicitamos lo notifique inmediatamente al remitente, reenviando este mensaje y elimínelo de su sistema. En los términos de la Ley
                            Federal de Protección de Datos Personales en Posesión de los Particulares, TRANSPORTADORA Y LOGISTICA PEREZ, S.A. DE

                            C.V., es responsable del tratamiento de sus datos personales que tiene registrados, con motivo de su inscripción o información
                            proporcionada a la Institución. Promovemos y defendemos los principios y valores empresariales, sin el afán de molestarle o poner en
                            peligro sus datos. Si usted ya no desea recibir informaciónn nuestra, agradeceríamos nos lo haga saber por cualquiera de los siguientes
                            medios: teléfono (01 591) 9120803, oscar571@prodigy.net.mx  por escrito o de manera personal en Av. Juárez 17 Col. Centro Santiago
                            Tequixquiac, Estado de México.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/servicios.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/inicio.js"></script>
</body>
</html>