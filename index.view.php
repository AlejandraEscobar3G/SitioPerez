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
                    <a class="nav-link" href="#">Inicio</a>
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
            <div class="carousel-item active">
                <div class="blue text-light container-fluid">
                    <div class="row">
                        <div class="col">
                            <p class="title pt-4 pl-4">MISIÓN, VISIÓN Y TRAYECTORIA</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img class="d-block slider" src="img/inicio/gps.jpg" alt="1 slide">
                    <div class="position-absolute field bottom d-none d-md-block">
                        <p class="w-50 d-block float-left text-light py-4 px-5 text-justify">Tenemos 50 años de experiencia en el transporte terrestre; hemos crecido a la par de las regulaciones para el traslado de materiales y residuos peligrosos. <br>Buscamos la excelencia y la rentabilidad mediante los niveles óptimos de competitividad, servicio, calidad, seguridad y protección al medio ambiente.</p>
                        <p class="w-50 d-block float-left text-light py-4 px-5 text-justify">Anticipamos las necesidades del cliente y del mercado excediendo los estándares requeridos a través de la inversión, creatividad e innovación. <br>Reconocemos el valor de nuestro personal fomentando su constante superación para contar con recursos humanos calificados y comprometidos.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blue text-light container-fluid">
                    <div class="row">
                        <div class="col">
                            <p class="title pt-4 pl-4">RASTREO GPS</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img class="d-block slider" src="img/inicio/gps.jpg" alt="2 slide">
                    <div class="position-absolute field p-4 left d-none d-md-block width-side">
                        <p class="d-block text-light py-3 px-3 text-justify">Rastreo y monitoreo permanente durante todo el trayecto de su carga.</p>
                        <p class="d-block text-light py-3 px-3 text-justify">Anticipamos las necesidades del cliente y del mercado excediendo los estándares requeridos a través de la inversión, creatividad e innovación. <br>Reconocemos el valor de nuestro personal fomentando su constante superación para contar con recursos humanos calificados y comprometidos.</p>
                        <ul class="list-unstyled py-4 text-light text-center pt-4">
                            <li>√  Apagado de motor</li>
                            <li>√  Sensores de movimiento</li>
                            <li>√  Cuenta espejo</li>
                            <li>√  Comunicación con operadores</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blue text-light container-fluid">
                    <div class="row">
                        <div class="col">
                            <p class="title pt-4 pl-4">AUTOPROTECCIÓN</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img class="d-block slider" src="img/inicio/autoproteccion.jpg" alt="3 slide">
                    <div class="position-absolute field right d-none d-lg-block text-light width-side">
                        <p class="text-justify py-4 px-4">Nuestros operadores están capacitados para cualquier situación de derrame o fuga durante su trayecto. Para eso cuentan con todas las medidas de contención como lo son: </p>
                        <ul class="list-unstyled px-5 py-2 responsive-font">
                            <li>√ Material absorbente de 50 kg.</li>
                            <li>√ Contenedor, bolsas transparentes.</li>
                            <li>√ Depósito para contención de derrames.</li>
                            <li>√ Pico, pala y caja de herramientas.</li>
                            <li>√ Botiquín de primeros auxilios.</li>
                            <li>√ Extinguidor tipo ABC de 9 kg.</li>
                            <li>√ Lámpara sorda.</li>
                            <li>√ Gatas de sujeción de carga.</li>
                            <li>√ Triángulos reflejantes de seguridad.</li>
                            <li>√ Cintas reflejantes en cajas secas.</li>
                            <li>√ Retrancas.</li>
                            <li>√ Servicio de telefonía celular.</li>
                            <li>√ Localización vía satélite con GECKOTECH.</li>
                            <li>√ Sistema de tarjeta IAVE.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blue text-light container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="title pt-4 pl-4">MIEMBROS PROCCYT</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">   
                    <div class="row position-relative">
                        <div class="col-6 col-lg-7">
                            <img class="d-block w-100 slider" id="slide-proc" src="img/inicio/tolva_roja.png" alt="5 slide">
                        </div>
                        <div class="col-6 col-lg-5 align-self-center">
                            <img class="d-block mx-auto" id="proccyt-slide" src="img/inicio/logo_proccyt.png" alt="proccyt">
                        </div>
                        <div class="position-absolute field bottom w-100 d-none d-lg-block text-light">
                            <p class="text-justify text-center py-5 px-4">Reconocimiento por parte de PROCCYT por alcanzar los más altos estándares de calidad en transportación, noviembre 2004.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="blue text-light container-fluid">
                    <div class="row">
                        <div class="col">
                            <p class="title pt-4 pl-4">EVALUACIÓN DE RIESGOS</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img class="d-block w-100 slider" src="img/inicio/riesgos.jpg" alt="4 slide">
                    <div class="position-absolute field d-none d-md-block right p-5 text-light width-side">
                        <p class="text-justify px-3">Capacidad, experiencia y equipo necesarios para transportar de forma segura y eficiente productos químicos, agroquímicos y materiales peligrosos en vehículos terrestres. Equipo de seguridad especializado como lo es: </p>
                        <ul class="list-unstyled px-3 responsive-font">
                            <li>√ Uniforme distintivo.</li>
                            <li>√ Casco.</li>
                            <li>√ Lentes de seguridad.</li>
                            <li>√ Gogles.</li>
                            <li>√ Botas de seguridad con casquillo.</li>
                            <li>√ Mascarilla para polvos (moldex).</li>
                            <li>√ Mascarilla para vapores.</li>
                            <li>√ Mandil de hule.</li>
                            <li>√ Guantes de carnasa y nitrillo.</li>
                            <li>√ Botas de hule.</li>
                            <li>√ Traje tipo buzo (Tívet).</li>
                        </ul>
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
            <div class="col-sm-2"></div>
            <div class="col-12 col-sm-4">
                <img class="h-90 d-block float-right" src="img/certificaciones/aniq.png" alt="aniq">
            </div>
            <div class="col-12 col-sm-4">
                <img class="h-90 d-block float-left" src="img/certificaciones/integral.png" alt="integral">
            </div>
            <div class="col-sm-2"></div>
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
            <div class="col-sm-2"></div>
            <div class="col-12 col-sm-4">
                <img class="float-right d-block h-90" src="img/certificaciones/neec.png" alt="neec">
            </div>
            <div class="col-12 col-sm-4">
                <img class="h-90 d-block float-left" src="img/certificaciones/recurso.jpg" alt="recurso">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row no-gutters pt-5">
            <div class="col-12 col-md-4">
                <div class="p-4 text-left text-light blue text-center h-100">
                    <p class="text-center display-5">PERMISOS</p>
                    <p class="p-2">Permiso para el transporte terrestre de materiales y residuos peligrosos, emitido por la SCT (No-1512)</p>
                    <p class="p-2">Permiso para el transporte de residuos ante la SEMARNAT (DFMARNAT-3200-2017)</p>
                    <p class="p-2">Licencias tipo "E" de conductores de camión. Afiliación al seguro social a operadores.</p>
                </div>
            </div>
            <div class="col-md-2 align-self-center">
                <img class="mx-auto d-block img-fluid" src="img/icons/sct.png" alt="sct">
            </div>
            <div class="col-md-2 align-self-center">
                <img class="mx-auto d-block img-fluid" src="img/icons/semarnat.png" alt="semarnat">
            </div>
            <div class="col-12 col-md-4">
                <div class="p-4 text-light blue text-center h-100">
                    <p class="text-center display-5">IDENTIFICACIÓN</p>
                    <p class="p-2">Autorización para la recolección y transporte de residuos peligrosos. (15-096-PS-I-54-2003)</p>
                    <p class="p-2">Tarjeta de circulación especificada para el transporte de materiales y residuos peligrosos.</p>
                    <p class="p-2">IDENTIFICACIÓN <br>Portarrombos <br>Datos de teléfono de emergencia <br>Guía norteamericana de respuesta a emergencias</p>
                </div>
            </div>
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
                <p class="col text-center p-5 mb-0">Contamos con una amplia variedad de servicios, desde manejo de residuos peligrosos, hasta productos con grado alimenticio.</p>
            </div>
            <div class="row no-gutters p-3">
                <div class="col-12 col-md-6">
                    <img class="d-block mx-auto logos-serv p-4" data-toggle="tooltip" data-placement="top" title="Click here" id="transporte" src="img/icons/transporte.png" alt="transporte">
                </div>
                <div class="col-12 col-md-6">
                    <img class="d-block mx-auto logos-serv p-5" data-toggle="tooltip" data-placement="top" title="Click here" id="residuos" src="img/icons/residuos.png" alt="residuos">
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
                        <p class="p-2 text-justify"><b>HORARIOS</b> <br>De lunes a viernes de 09:00 a 06:30pm y los sábados de 09:00-1:00pm</p>
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
            <div class="col-12 col-sm-6 footer-left"><a class="text-light" href="aviso_privacidad.pdf"><small>AVISO DE PRIVACIDAD</small></a></div>
            <div class="col-12 col-sm-6 footer-right"><a class="text-light" href="#"><small>IR ARRIBA</small></a></div>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/servicios.js"></script>
    <script src="js/contacto.js"></script>
</body>
</html>