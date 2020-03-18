
@extends('layouts.cascara')

@section('all')

    <!-- Modal Como obtener -->
    <div class="modal modal-obtener" >
        <div class="modal-inner">
            <div class="img"></div>
            <div class="data">
                <div class="x"></div>
                <div class="header">
                    <img src="{{asset('/images/hoja.png')}}">
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
                    <img src=" {{asset('/images/hoja.png')}}">
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

    <!-- Header -->
    <header>
        <div class="header-inner paddings-l-r" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
            <a href="/" class="logo">
                <img src=" {{asset('/images/logo.png')}}" alt="Ir al Inicio">
            </a>

            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="buttons">
                <div class="menu">
                    <a href="#" class="menuu  " id="GoApp">APP</a>
                    <a href="#"  class="menuu" id="GoServicios" >Servicios</a>
                    <a href="#" class="menuu" id="GoEquipo" >Equipo</a>
                    <a href="#" class="menuu" id="GoPlanes" >Planes</a>
                 </div>
            </div>
            <div class="buttons">
                <a href="#" class="button outline">Iniciar Sesión</a>
                <a href="#" class="button left button-plan-prueba">Contacto</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero" id="top">
        <div class="hero-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="400">
            <h1 class="hero"><span class="color-green">Tenga el control</span> de su mano de obra en terreno </h1>
            <p>Normalmente, el Costo de Mano de Obra representa alrededor del 60% - 70% del Costo Total.
            </p>
            <a href="#" class="button button-plan-prueba">Pruebe Gratis</a>
        </div>
    </section>
    <!-- Presentación -->
    <section class="presentacion" >
        <div class="presentacion-inner paddings-l-r"  id="presentacion">
            <div class="card">
                <h2>Aplicacion para<span class="color-green"> Profesionales del Agro</span></h2>
                <!-- Item -->
                <div class="item">
                    <div class="title">
                        <img src="{{asset('/images/hoja.png')}}">
                        <h5>Herramientas Digitales</h5>
                    </div>
                    <p>Agroqlik, APP de Captura de Mano de Obra
                    </p>
                </div>
                <!-- Item -->
                <div class="item">
                    <div class="title">
                        <img src=" {{asset('images/hoja.png')}}">
                        <h5>Equipo humano</h5>
                    </div>
                    <p>
                       Profesionales con mas de 20 años de experiencia en el agro
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Presentacion de la App -->
    <section class="the-app">
        <div class="the-app-inner paddings-l-r"  id="APP">
            <div class="img" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-out">
                <img src=" {{asset('/images/app-mockup.png')}}" alt="App de NFIT">
            </div>
            <div class="data" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <h3>
                   Captura de Mano de Obra
                    <span class="color-green">  en la palma de su mano
                    </span>
                </h3>
                <div class="items">
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}">
                        <p>Con la APP AgroQlik puede controlar al detalle
                            y en linea los costos de Mano de Obra
                        </p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}">
                        <p>Gestionar para generar optimizaciones y mejoras en sus resultados</p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}">
                        <p>La Asistencia de su Personal</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Los Costos por Labores</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Los Costos por cada Centro d Costo Productivo</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>La Cantidad de Jornales Pagada</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>El Total ganado por cada uno de los Trabajadores</p>
                    </div>
                </div>
                <div class="buttons">
                    <a href="#">
                        <img src="{{asset('/images/google-play-badge.png')}}">
                    </a>
                    <a href="#">
                        <img src="{{asset('/images/app-store-badge.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Presentacion de la Web App -->
    <section class="the-webapp">
        <div class="the-webapp-inner paddings-l-r">
            <div class="data" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <h3 class="h">Con la AgroQlik registramos sus datos<span class="color-green"> y con Qlikview, convertimos en Información</span>  para la toma de decisiones.

                  </h3>
                <div class="checks">
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Descubre ¿Qué esta pasando? y ¿Porqué?</p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Control de Recurso Humano en tiempo real.</p>
                    </div>

                    <div class="check">
                       <img src=" {{asset('/images/check.png')}}">
                        <p>Generar Optimizaciones y mejoras en sus resultados en base a datos.</p>
                    </div>

                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p> Reportes diseñados según los casos y variables criticas.</p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Análiticas Descriptivas</p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Conocimiento de sus datos</p>
                    </div>
                </div>

            </div>
            <div class="img" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-out">
                <img src=" {{asset('/images/webapp-mockup.png')}}" alt="WebApp de NFIT">
            </div>
        </div>
    </section>

    <!-- Los Servicios -->
    <section class="servicios ">
        <div class="servicios-inner paddings-l-r"  id="servicio">
            <h2 data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">Con AgroQlik tendrá acceso a servicios y asesorías especializadas en las siguientes área</h2>
            <div class="items">
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="header">
                        <img src=" {{asset('/images/servicio-analisis.png')}}">
                        <h5>Análisis y Gestión</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}} ">
                            <p>Asesoría en Control de Gestión</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis de “Captura de Mano de Obra” </p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis de Liquidaciones de Exportadoras</p>
                        </div>

                    </div>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                    <div class="header">
                        <img src="{{asset('')}}/images/servicio-rrss.png">
                        <h5>Recursos Humanos</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Redacción de contratos individuales y pactos colectivos</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Proceso de cálculo de remuneraciones y leyes sociales</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Desvinculaciones y elaboración de finiquitos</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Redacción de reglamentos internos</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Subcontratación y tercerización de servicios </p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Control de vacaciones y permisos del personal</p>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="600">
                    <div class="header">
                        <img src="{{asset('images/servicio-bi.png')}}">
                        <h5>Inteligencia de Negocios</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Indicadores de Rendimientos </p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Reportes y Análisis especializados.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>   Análisis y evaluación de Costos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>    Integración de datos</p>
                        </div>

                    </div>
                </div>

            </div>
    </section>

    <!-- Equipo -->
    <section class="equipo" >
        <div class="equipo-inner paddings-l-r" id="equipo">

            <h2 data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">Un equipo con trayectoria, cercano y profesional.</h2>
            <div class="personas">
                <!-- Persona -->
                <div class="persona" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img paulo">

                    </div>
                    <div class="data">
                        <h5>Paulo Sánchez:</h5>
                        <br>
                        <p class="description">
                           Socio Director y Fundador de AgroQlik<br>Ingeniero & MBA,<br>
                            Certificado en Qlikview
                        </p>
                        <p>
                            Con más de 15 años de experiencia en las áreas de Control de Gestion, Administración & Finanzas y Operaciones.
                        </p>
                        <p>
                            Agente en empresas de Retail, Jefe de Administración y Finanzas en Agroindustriales y
                            Agrícolas.
                        </p>
                        <div class="rrss">
                            <a href="https://linkedin.com"><img src=" {{asset('/images/icon-linkedin.png')}}"
                                    alt="LinkedIn"></a>
                            <a href="mailto:correo@correo.mail"><img src=" {{asset('/images/icon-email.png')}}"
                                    alt="LinkedIn"></a>
                        </div>
                    </div>
                </div>
                <!-- Persona -->
                <div class="persona" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img susana">

                    </div>
                    <div class="data">
                        <h5>Susana Álvarez "Ejecutiva senior"</h5>
                        <br>
                        <p class="description">
                            Senior en Recursos Humanos
                        </p>
                        <p>
                            Profesional con más de 25 años de experiencia en las áreas de Recursos Humanos,
                            Administración.
                        </p>
                        <p>
                            Sénior en Recursos Humanos en empresa de retail, Asistente en Viña "Requingua"
                        </p>
                        <div class="rrss">
                            <a href="https://linkedin.com"><img src="{{asset('/images/icon-linkedin.png')}}"
                                    alt="LinkedIn"></a>
                                    <a href="mailto:correo@correo.mail"><img src=" {{asset('/images/icon-email.png')}}"
                                        alt="LinkedIn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonio -->
    <section class="testimonio"  >
        <div class="testimonio-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="200" >
            <div class="item">
                <div class="img">
                    <img src=" {{asset('/images/test-1.jpg')}}" alt="">
                </div>
                <h4>
                    “ Con AgroQlik obtengo datos,
                     análisis e información para tomar decisiones acertadas y lograr la mejor producción ”
                </h4>
                <h6>Jaime Berenguer</h6>
                <p class="little">Productor Agricola</p>
                <p>Premio Productividad e Inovacion 2019 por Comité del Kiwi Chile </p>
            </div>
        </div>
    </section>

    <!-- Planes -->
    <section class="planes-wrapper" >
        <div class="planes-inner paddings-l-r" id="planes">
            <h2 data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                Planes
                <span>
                    para todo tipo de empresas
                </span>
            </h2>
            <div class="items">
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <div class="header">
                        <img src="         {{asset('')}}/images/hoja.png">
                        <h3>Plan 1</h3>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                    </div>
                    <h4>$00.000</h4>
                    <div>
                        <a href="#" class="button button-plan-info">Más Información</a>
                    </div>
                </div>
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="300">
                    <div class="header">
                        <img src="{{asset('/images/hoja.png')}}">
                        <h3>Plan 2</h3>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                    </div>
                    <h4>$00.000</h4>
                    <div>
                        <a href="#" class="button button-plan-info">Más Información</a>
                    </div>
                </div>
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="450">
                    <div class="header">
                        <img src="         {{asset('/images/hoja.png')}}">
                        <h3>Plan 3</h3>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}">
                            <p>Suspendisse magna dolor, porta ut tempus vitae ullamcorper</p>
                        </div>
                    </div>
                    <h4>$00.000</h4>
                    <div>
                        <a href="#" class="button button-plan-info">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hectareas Gestionadas -->
    <section class="hectareas">
        <div class="hectareas-inner paddings-l-r">

            <h2 data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                <span class="color-green">
                    Más de 1.800 Hás
                </span>
                gestionadas con AgroQlik
            </h2>

            <div class="items">
                <!-- Item -->
                <div class="item itemm card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src="         {{asset('/images/icon-cereza.png')}}">
                    <h5>160 Hás</h5>
                    <p class="color-green">Cerezos</p>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <img src="         {{asset('/images/icon-kiwi.png')}}">
                    <h5>180 Hás</h5>
                    <p class="color-green">Kiwi</p>
                </div>
                <!-- Item -->
                <div class="item itemm card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="400">
                    <img src="         {{asset('/images/icon-uva.png')}}">
                    <h5>632 Hás</h5>
                    <p class="color-green">Viñas</p>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="600">
                    <img src="         {{asset('/images/icon-manzana.png')}}">
                    <h5>720 Hás</h5>
                    <p class="color-green">Manzanos</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="cta-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="200">
                <h1>Simplifica el control de tu mano de obra con Agroqlik</h1>
                <a href="" class="button button-plan-prueba">Contáctanos</a>
        </div>
    </section>

@endsection
