<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgroQlik - Software de gestión agrícola para el control de mano de obra</title>
    <meta name="description" content="Software de gestión agrícola, desde tu móvil o web maneja el control de costos y mano de obra para la toma de decisiones de la gestión agrícola">

    <!-- OG -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AgroQlik - Aplicación Movil para Profesionales del Agro" />
    <meta property="og:description" content="AgroQlik® app hace simple y efectiva la gestión de trabajadores para pequeñas y grandes empresas del agro, generando información útil para la toma de decisiones." />
    <meta property="og:image" content="https://agroqlik.cl/images/og-facebook.png" />
    <meta property="og:url" content="https://agroqlik.cl" />
    <meta content="summary" name="twitter:card">
    <meta name="twitter:title" content="AgroQlik - Aplicación Movil para Profesionales del Agro" />
    <meta name="twitter:description" content="AgroQlik® app hace simple y efectiva la gestión de trabajadores para pequeñas y grandes empresas del agro, generando información útil para la toma de decisiones." />
    <meta name="twitter:url" content="https://agroqlik.cl" />
    <meta name="twitter:image" content="https://agroqlik.cl/images/og-twitter.jpg" />
    
    <!-- Favicons -->    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('/favicons/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/favicons/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/favicons/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/favicons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('/favicons/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('/favicons/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('/favicons/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('/favicons/apple-touch-icon-152x152.png') }}" />

    <link rel="icon" type="image/png" href="{{ asset('/favicons/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('/favicons/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('/favicons/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('/favicons/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('/favicons/favicon-128.png') }}" sizes="128x128" />

    <meta name="application-name" content="AgroQlik"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="{{ asset('/favicons/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('/favicons/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('/favicons/mstile-150x150.png') }}'" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('/favicons/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('/favicons/mstile-310x310.png') }}" />

    <!-- Estilos -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('/css/app.css')}}?v=4"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{asset('/css/app.min.css')}}?v=5">
    <!-- Fin Estilos -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177526597-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-177526597-1');
    </script>

    {{-- <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MW96L82');</script>
    <!-- End Google Tag Manager --> --}}
</head>

<body class="site-wrapper">

    {{-- <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW96L82"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> --}}

    {{-- UP --}}
    <div class="goToUp">
        <img src="{{asset('/images/up.svg')}}" class="up" alt="Agroqlik">
    </div>

    {{-- Botón Whatsapp --}}
    <a class="whatsapp-button" href="https://wa.me/56999839782/?text=Me%20interesa%20un%20plan%20de%20AgroQlik"></a>

    <main class="site-main">

        <!-- Modal Como obtener -->
        <div class="modal modal-obtener" >
            <div class="modal-inner">
                <div class="img"></div>
                <div class="data">
                    <div class="x"></div>
                    <div class="header">
                        <img src="{{asset('/images/hoja.png')}}" alt="AgroQlik">
                        <h3>¿Como obtener <span class="color-green">AgroQlik</span>?</h3>
                    </div>
                    <div class="cards">

                        <!-- Card -->
                        <div class="card">
                            <div class="list-number">
                                <p>1</p>
                            </div>
                            <div class="text">
                                <h4>Regístrate</h4>
                                <p>
                                    Nulla elementum mauris eget purus tincidunt dictum. Nunc et accumsan turpis, nec eleifend quam. Aenean pretium ultrices ex, vel ultricies aquí.
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="card">
                            <div class="list-number">
                                <p>2</p>
                            </div>
                            <div class="text">
                                <h4>AgroQlik te contácta</h4>
                                <p>
                                    Nulla elementum mauris eget purus tincidunt dictum. Nunc et accumsan turpis, nec eleifend quam. Aenean pretium ultrices ex, vel ultricies aquí.
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="card">
                            <div class="list-number">
                                <p>3</p>
                            </div>
                            <div class="text">
                                <h4>Descarga la App</h4>
                                <p>
                                    Nulla elementum mauris eget purus tincidunt dictum. Nunc et accumsan turpis, nec eleifend quam. Aenean pretium ultrices ex, vel ultricies aquí.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Contratar -->
        <div class="modal modal-contratar">
            <div class="modal-inner">

                <div class="img"></div>

                <div class="data">
                    <div class="x"></div>
                    <div class="header">
                        <img src=" {{asset('/images/hoja.png')}}" alt="AgroQlik">
                        <h3>Solicita <span class="color-green">AgroQlik</span></h3>
                    </div>

                    <form class="form" action="{{ route('ruta') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Nombre" required>
                        <input type="email" name="mail" placeholder="Correo" required>
                        <input type="tel" name="phone" placeholder="Teléfono" required>
                        <input type="text" name="company" placeholder="Nombre de Empresa" required>
                        <input type="text" name="city" placeholder="Ciudad" required>
                        <input type="text" name="region" placeholder="Región" required>
                        <input type="submit" name="enviarContacto" value="Quiero la prueba gratis" id="formulario-enviar" required>
                    </form>

                </div>

            </div>
        </div>
        
        <div class="modal" id="modal-response">
            <div class="modal-inner">

                <div class="img"></div>

                <div class="data">
                    <div class="x"></div>
                    <div class="header">
                        <img src=" {{asset('/images/hoja.png')}}" alt="AgroQlik">
                        <h3>Solicita <span class="color-green">AgroQlik</span></h3>
                    </div>
                    <div class="text-center">
                        <p>{{Session::get('success')}}</p>
                        <p>{{Session::get('danger')}}</p>
                    </div>

                </div>

            </div>
        </div>
        
    
        {{-- Info pre header --}}
        <div class="info-header">
            <div class="info-header-inner">
                <p>Llámanos al <a href="tel:+56989222422">+569 892 224 22</a></p>
                <p>Contactanos en <a href="mailto:contacto@agroqlik.cl">contacto@agroqlik.cl</a></p>
            </div>
        </div>
        
        <!-- Header -->
        <header>
            <div class="header-inner paddings-l-r" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                <a href="/" class="logo">
                    <img src="{{asset('/images/logo.png')}}" alt="Ir al Inicio">
                </a>

                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="menu-wrapper">
                    <div class="menu" id="mobil-menu">
                        <a href="#" class="menuu" id="GoApp">App y Plataforma</a>
                        {{-- <a href="#" class="menuu" id="GoPlataforma">Plataforma</a> --}}
                        <a href="#"  class="menuu" id="GoServicios" >Servicios</a>
                        <a href="#" class="menuu" id="GoEquipo" >Equipo</a>
                        <a href="#" class="menuu" id="GoPlanes" >Planes</a>
                    </div>
                </div>
                <div class="buttons">
                    <a href="https://clientes.agroqlik.cl/login" class="button outline">Iniciar Sesión</a>
                    {{-- <a href="#" class="button left button-plan-prueba">Pruebe Gratis</a> --}}
                    <a href="#" class="button left button-plan-prueba">Demo Gratis</a>

                </div>
            </div>
        </header>
