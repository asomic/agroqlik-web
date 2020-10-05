
@extends('layouts.cascara')

@section('all')

    <!-- Hero -->
    <section class="hero" id="top">
        <div class="hero-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="400">
            <div class="img">
                <img src="{{ asset('/images/scene.png') }}" alt="AgroQlik App">
            </div>
            <div class="data">
                {{-- <h6>Captura de Mano de Obra</h6> --}}
                <h1 class="hero">
                    {{-- APP Captura de mano de obra --}}
                    Digitaliza tus labores<br>en terreno
                    {{-- <span class="color-green">
                    Tenga el control</span><br> de su mano de obra en terreno --}}                    
                    {{-- <span class="color-green">
                    Tenga el control</span><br> de su mano de obra en terreno --}}
                </h1>
                <p>
                    AgroQlik® app hace simple y efectiva la gestión de trabajadores para pequeñas y grandes empresas del agro, 
                    {{-- generando información útil para la toma de decisiones. --}}
                    controlando los costos para mano de obra.
                </p>
                {{-- Botón contacta a un asesor (whatsapp don paulo) --}}
                {{-- <a href="#" class="button button-plan-prueba" style="margin-right: 4px">Demo Gratis</a> --}}
                <a href="{{ asset('/files/brochure.pdf') }}" class="button highlight" target="_blank" style="margin-right: 4px">Descargar Brochure</a>
                <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=gXN44T0HxRo" class="button">
                    <img src="{{ asset('/images/ico-video.svg') }}" alt="Ver Video">
                    Ver Video
                </a>
                {{-- <a href="https://wa.me/56966070874" class="button">Contacte a un asesor</a> --}}
            </div>
        </div>
    </section>
    
    @include('layouts.presentacion')

    <!-- Presentacion de la App -->
    <section class="the-app">
        <div class="the-app-inner paddings-l-r"  id="app">
            <div class="img" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-out">
                {{-- <img src=" {{asset('/images/app-mockup.png')}}" alt="App de NFIT"> --}}
                <img src=" {{asset('/images/app-mockup2.png')}}" alt="App AgroQlik">
            </div>
            <div class="data" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <h3>
                   {{-- Captura de Mano de Obra --}}
                   Captura de Mano de Obra <span class="color-green">en su móvil</span>
                    {{-- <span class="color-green">en la palma de su mano
                    </span> --}}
                </h3>
                <div class="items">
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Con la App AgroQlik puede controlar al detalle y en linea los costos de mano de obra. --}}
                            Control al detalle y en línea de los costos de Mano de Obra.
                        </p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Controlar la asistencia de sus trabajadores. --}}
                            Optimización de recurso humano y mejora de sus resultados.
                        </p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Datos claves de los centros de costos. --}}
                            Registro de Asistencia de sus trabajadores.
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Obtener los costos por labores en tiempo oportuno. --}}
                            Gestión de labores por personal y centro de costo.
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Cantidad de jornadas pagadas. --}}
                            Gestión de Jornales pagadas por cada uno de sus trabajadores.
                        </p>
                    </div>
                    {{-- <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>Total ganado por trabajador.</p>
                    </div> --}}
                </div>
                <div class="buttons">
                    <a href="https://play.google.com/store/apps/details?id=com.asomic.agroqlik">
                        <img src="{{asset('/images/google-play-badge.png')}}" alt="Google Play Badge">
                    </a>
                    <a href="https://apps.apple.com/app/id1510795447">
                        <img src="{{asset('/images/app-store-badge.png')}}" alt="App Store Badge">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Presentacion de la Web App -->
    <section class="the-webapp">
        <div class="the-webapp-inner paddings-l-r" id="plataforma">
            <div class="data" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <h3 class="h">
                    {{-- Con AgroQlik registramos sus datos<span class="color-green"> y con Qlikview, convertimos en Información</span>para la toma de decisiones. --}}
                    <span class="color-green">Visualice y analice</span> su mano de obra en detalle.
                </h3>
                <div class="checks">
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Descubre ¿Qué esta pasando? y ¿Porqué?. --}}
                            Descubra qué está pasando y porqué.
                        </p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Descubre ¿Qué esta pasando? y ¿Porqué?. --}}
                            {{-- Descubra qué está pasando y porqué. --}}
                            Controle la información y rendimiento de su Contratista
                        </p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Control de Recurso Humano en tiempo real. --}}
                            Mida y Controle su Recurso Humano en tiempo real.
                        </p>
                    </div>

                    <div class="check">
                       <img src=" {{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Generar Optimizaciones y mejoras en sus resultados en base a datos. --}}
                            Obtenga reportes diseñados según casos y variables críticas.
                        </p>
                    </div>

                    <div class="check">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Reportes diseñados según los casos y variables criticas. --}}
                            Transforme datos en información relevante.
                        </p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}" alt="check icon">
                        <p>
                            {{-- Análiticas Descriptivas. --}}
                            Tome decisiones acertadas y estratégicas.
                        </p>
                    </div>
                    {{-- <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>
                            Conocimiento de sus datos.
                        </p>
                    </div> --}}
                </div>

            </div>
            <div class="img" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-out">
                <img src=" {{asset('/images/webapp-mockup.png')}}" alt="WebApp AgroQlik">
            </div>
        </div>
    </section>

    <!-- Los Servicios -->
    <section class="servicios ">
        <div class="servicios-inner paddings-l-r" id="servicio">
            <h2 data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                {{-- Con AgroQlik tendrá acceso a servicios y asesorías especializadas en las siguientes áreas --}}
                {{-- Servicios y asesorías especializadas incluidas --}}
                Complementa la App con estos servicios
            </h2>
            <p class="desc">
                Si quieres seguir profesionalizando tu empresa, cotiza nuestros servicios adicionales, tenemos los complementos que necesitas.
            </p>
            <div class="items">
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="header">
                        <img src=" {{asset('/images/servicio-analisis.png')}}" alt="Icono analisis y gestion">
                        <h5>Análisis y Gestión</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Asesoría en Control de Gestión.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Análisis de “Captura de Mano de Obra”. </p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Análisis comparativo de Liquidaciones de Exportadoras</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Preparación y Análisis de Presupuestos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Preparación y Análisis de Cash Flow</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Análisis de estados de resultados y sus desviaciones</p>
                        </div>

                    </div>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                    <div class="header">
                        <img src="{{asset('')}}/images/servicio-rrss.png" alt="Recursos Humanos">
                        <h5>Recursos Humanos</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Redacción de contratos individuales y pactos colectivos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Proceso de cálculo de remuneraciones y leyes sociales</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Desvinculaciones y elaboración de finiquitos.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Redacción de reglamentos internos.</p>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="600">
                    <div class="header">
                        <img src="{{asset('images/servicio-bi.png')}}" src="inteligencia de negocios">
                        <h5>Inteligencia de Negocios</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Indicadores de Rendimientos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Reportes y Análisis especializados.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Análisis y evaluación de Costos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Integración de datos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Apoyar la planificación financiera y la realización de presupuestos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}" alt="icon check">
                            <p>Analizar el rendimiento de las inversiones</p>
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
                        <h5>Paulo Sánchez</h5>
                        {{-- <br> --}}
                        <p class="description">
                          Fundador de AgroQlik®<br>Ingeniero & MBA<br>
                            Certificado en Qlikview
                        </p>
                        <p>
                            Con más de 15 años de experiencia en las áreas de Control de Gestion, Administración & Finanzas y Operaciones.
                        </p>
                        {{-- <p>
                            Jefe de Administración y Finanzas en Empresas Agrícolas y AgroIndustriales.
                        </p> --}}
                        <div class="rrss">
                            <a href="https://www.linkedin.com/in/paulo-s%C3%A1nchez-9850aa30/"><img src=" {{asset('/images/icon-linkedin.png')}}"
                                    alt="LinkedIn"></a>
                            <a href="mailto:paulo.sanchez@agroqlik.cl"><img src=" {{asset('/images/icon-email.png')}}"
                                    alt="Correo"></a>
                        </div>
                    </div>
                </div>
                <!-- Persona -->
                <div class="persona" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img susana">
                    </div>
                    <div class="data">
                        <h5>Susana Álvarez</h5>
                        {{-- <br> --}}
                        <p class="description">
                            Ejecutiva Senior<br>Recursos Humanos.
                        </p>
                        <p>
                            Profesional con más de 25 años de experiencia en las áreas de Recursos Humanos y Administración.
                        </p>
                        {{-- <p>
                            Senior en Recursos Humanos en empresa de retail y Asistente en Viña “Requingua”.
                        </p> --}}
                        <div class="rrss">
                            <a href="https://www.linkedin.com/in/susana-%C3%A1lvarez-26025b1ab"><img src="{{asset('/images/icon-linkedin.png')}}"
                                    alt="LinkedIn"></a>
                                    <a href="mailto:susana.alvarez@agroqlik.cl"><img src=" {{asset('/images/icon-email.png')}}"
                                        alt="Correo"></a>
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
                    <img src=" {{asset('/images/test-1.jpg')}}" alt="Jaime Berenguer">
                </div>
                <h4>
                    “Con AgroQlik obtengo datos,
                     análisis e información para tomar decisiones acertadas y lograr la mejor producción”
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
                        <img src="{{asset('')}}/images/hoja.png" alt="AgroQlik">
                        <h4>Gratis</h4>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 10 trabajadores</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Fundo</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 usuario capturador</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Usuario administrador (plataforma web)</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (captura de mano de obra)</p>
                        </div>                        
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (centros de costos)</p>
                        </div>
                        {{-- <div class="check" style="visibility: hidden">
                            <img src="         {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (centros de costos) 1 reporte diario (centros de</p>
                        </div> --}}
                    </div>
                    <div class="plan-footer">
                        <h4>$0</h4>
                        <p class="regular-price">
                            Los primeros 6 meses
                        </p>
                        <div>
                            <a href="#" class="button button-plan-prueba">Demo Gratis</a>
                        </div>
                    </div>
                </div>
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="150">
                    <div class="header">
                        <img src="{{asset('')}}/images/hoja.png" alt="AgroQlik">
                        <h4>Plus</h4>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 25 trabajadores</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Fundo</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 2 usuarios capturadores</p>
                        </div>
                        <div class="check">
                            <img src="  {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Usuario administrador (plataforma web)</p>
                        </div>
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (captura de mano de obra)</p>
                        </div>                        
                        <div class="check">
                            <img src="         {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (centros de costos)</p>
                        </div>
                        {{-- <div class="check" style="visibility: hidden"> --}}
                            {{-- <img src="         {{asset('/images/check.png')}}" alt="AgroQlik"> --}}
                            {{-- <p>1 Reporte diario (centros de costos)</p> --}}
                        {{-- </div> --}}
                    </div>
                    <div class="plan-footer">
                        <h4>$9.990</h4>
                        <p class="regular-price">
                            Mensual
                        </p>
                        <div>
                            <a href="#" class="button button-plan-prueba">Demo Gratis</a>
                        </div>
                    </div>
                </div>
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="300">
                    <div class="header">
                        <img src="{{asset('/images/hoja.png')}}" alt="AgroQlik">
                        <h4>Profesional</h4>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 60 trabajadores</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 2 Fundos</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 3 usuarios caputadores</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Usuario administrador (plataforma web)</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Usuario gestor (acceso a reportes)</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (captura de mano de obra)</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (centros de costos)</p>
                        </div>
                    </div>
                    <div class="plan-footer">
                        <h4>$19.990</h4>
                        <p class="regular-price">
                            Mensual
                        </p>
                        <div>
                            <a href="#" class="button button-plan-prueba">Demo Gratis</a>
                        </div>
                    </div>
                </div>
                <!-- Card Plan -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="450">
                    <div class="header">
                        <img src="         {{asset('/images/hoja.png')}}" alt="AgroQlik">
                        <h4>Business</h4>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Desde 61 trabajadores</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 3 Fundos</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>Hasta 5 usuarios capturadores</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>2 Usuarios administrador (plataforma web)</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>2 Usuarios gestor (acceso a reportes</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (captura de mano de obra)</p>
                        </div>
                        <div class="check">
                            <img src=" {{asset('/images/check.png')}}" alt="AgroQlik">
                            <p>1 Reporte diario (centros de costos)</p>
                        </div>
                    </div>
                    <div class="plan-footer">
                        <h4>$29.990</h4>
                        <p class="regular-price">
                            Mensual
                        </p>
                        <div>
                            <a href="#" class="button button-plan-prueba">Demo Gratis</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan-full" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="plan-full-inner">
                    <h3>Plan Full Empresa</h3>
                    <p>
                        ¿Muchos Fundos que Digitalizar? ¿Necesitas un Mayor Alcance? Obtén Acceso full a las funcionalidades de AgroQlik.  Contactanos con tus requerimientos especiales para diseñar un plan a tu medida.
                    </p>
                    <a href="https://wa.me/56966070874" class="button">
                        Contacte a un asesor
                    </a>
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
                gestionadas con AgroQlik®
            </h2>

            <div class="items">
                <!-- Item -->
                <div class="item itemm card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out">
                    <img src="{{asset('/images/icon-cereza.png')}}" alt="icono cereza">
                    <h5>160 Hás</h5>
                    <p class="color-green">Cerezos</p>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <img src="{{asset('/images/icon-kiwi.png')}}" alt="icono kiwi">
                    <h5>180 Hás</h5>
                    <p class="color-green">Kiwi</p>
                </div>
                <!-- Item -->
                <div class="item itemm card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="400">
                    <img src="{{asset('/images/icon-uva.png')}}" alt="icono uva">
                    <h5>632 Hás</h5>
                    <p class="color-green">Viñas</p>
                </div>
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="600">
                    <img src="{{asset('/images/icon-manzana.png')}}" alt="icono manzana">
                    <h5>720 Hás</h5>
                    <p class="color-green">Manzanos</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="cta-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="200">
                <h2>Solicite su prueba gratis por 30 días.</h2>
                <a href="" class="button button-plan-prueba">Solicitar Aquí</a>
                <a href="https://wa.me/56966070874/?text=Me%20interesa%20un%20plan%20de%20AgroQlik" style="margin-left: 10px" class="button">Contacte a un asesor</a>
        </div>
    </section>

@endsection
