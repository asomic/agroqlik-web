
@extends('layouts.cascara')

@section('all')

    <!-- Hero -->
    <section class="hero" id="top">
        <div class="hero-inner paddings-l-r" data-aos="fade" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-delay="400">
            <div class="img">
                <img src="{{ asset('/images/scene.png') }}">
            </div>
            <div class="data">
                <h1 class="hero"><span class="color-green">
                    Tenga el control</span><br> de su mano de obra en terreno
                </h1>
                <p>
                    AgroQlik hace simple y efectiva la gestión de trabajadores para pequeñas y grandes empresas del agro, generando información útil para la toma de decisiones.
                </p>
            </div>
            {{-- <a href="#" class="button button-plan-prueba">Pruebe Gratis</a> --}}
        </div>
    </section>
    <!-- Presentación -->
    <section class="presentacion" >
        <div class="presentacion-inner paddings-l-r"  id="presentacion">
            <div class="card">
                {{-- <h2>Aplicacion para<span class="color-green"> Profesionales del Agro</span></h2> --}}
                <h2>La Mano de Obra representa alrededor del <span class="color-green">60% al 70% del Costo Total.</span></h2>
                <!-- Item -->
                <div class="item">
                    <div class="title">
                        <img src="{{asset('/images/hoja.png')}}">
                        <h5>Herramientas Digitales</h5>
                    </div>
                    <p>
                        {{-- AgroQlik, APP de Captura de Mano de Obra. --}}
                        Herramientas en terreno y oficina para conocer y gestionar lo que sucede con su personal
                    </p>
                </div>
                <!-- Item -->
                <div class="item">
                    <div class="title">
                        <img src=" {{asset('images/hoja.png')}}">
                        <h5>Equipo humano</h5>
                    </div>
                    <p>
                       {{-- Profesionales con mas de 20 años de experiencia en el agro. --}}
                       Asesoría y conocimiento de profesionales con más de 20 años de experiencia en el Agro.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Presentacion de la App -->
    <section class="the-app">
        <div class="the-app-inner paddings-l-r"  id="app">
            <div class="img" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-out">
                <img src=" {{asset('/images/app-mockup.png')}}" alt="App de NFIT">
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
                        <img src=" {{asset('/images/check.png')}}">
                        <p>
                            {{-- Con la App AgroQlik puede controlar al detalle y en linea los costos de mano de obra. --}}
                            Control al detalle y en línea de los costos de Mano de Obra.
                        </p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}">
                        <p>
                            {{-- Controlar la asistencia de sus trabajadores. --}}
                            Optimización de recurso humano y mejora de sus resultados.
                        </p>
                    </div>
                    <div class="item">
                        <img src=" {{asset('/images/check.png')}}">
                        <p>
                            {{-- Datos claves de los centros de costos. --}}
                            Registro de Asistencia de sus trabajadores.
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
                        <p>
                            {{-- Obtener los costos por labores en tiempo oportuno. --}}
                            Gestión de labores por personal y centro de costo.
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{asset('/images/check.png')}}">
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
        <div class="the-webapp-inner paddings-l-r" id="plataforma">
            <div class="data" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                <h3 class="h">
                    {{-- Con AgroQlik registramos sus datos<span class="color-green"> y con Qlikview, convertimos en Información</span>para la toma de decisiones. --}}
                    <span class="color-green">Visualice y analice</span> su mano de obra en detalle.
                </h3>
                <div class="checks">
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>
                            {{-- Descubre ¿Qué esta pasando? y ¿Porqué?. --}}
                            Descubra qué está pasando y porqué.
                        </p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>
                            {{-- Control de Recurso Humano en tiempo real. --}}
                            Mida y Controle su Recurso Humano en tiempo real.
                        </p>
                    </div>

                    <div class="check">
                       <img src=" {{asset('/images/check.png')}}">
                        <p>
                            {{-- Generar Optimizaciones y mejoras en sus resultados en base a datos. --}}
                            Obtenga reportes diseñados según casos y variables críticas.
                        </p>
                    </div>

                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
                        <p>
                            {{-- Reportes diseñados según los casos y variables criticas. --}}
                            Transforme datos en información relevante.
                        </p>
                    </div>
                    <div class="check">
                        <img src="{{asset('/images/check.png')}}">
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
                <img src=" {{asset('/images/webapp-mockup.png')}}" alt="WebApp de NFIT">
            </div>
        </div>
    </section>

    <!-- Los Servicios -->
    <section class="servicios ">
        <div class="servicios-inner paddings-l-r" id="servicio">
            <h2 data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                {{-- Con AgroQlik tendrá acceso a servicios y asesorías especializadas en las siguientes áreas --}}
                Servicios y asesorías especializadas incluidas
            </h2>
            <div class="items">
                <!-- Item -->
                <div class="item card" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="header">
                        <img src=" {{asset('/images/servicio-analisis.png')}}">
                        <h5>Análisis y Gestión</h5>
                    </div>
                    <div class="checks">
                        <div class="check">
                            <img src="{{asset('/images/check.png')}} ">
                            <p>Asesoría en Control de Gestión.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis de “Captura de Mano de Obra”. </p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis comparativo de Liquidaciones de Exportadoras</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Preparación y Análisis de Presupuestos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Preparación y Análisis de Cash Flow</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis de estados de resultados y sus desviaciones</p>
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
                            <img src="{{asset('/images/check.png')}}">
                            <p>Redacción de contratos individuales y pactos colectivos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Proceso de cálculo de remuneraciones y leyes sociales</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Desvinculaciones y elaboración de finiquitos.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Redacción de reglamentos internos.</p>
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
                            <p>Indicadores de Rendimientos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Reportes y Análisis especializados.</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Análisis y evaluación de Costos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Integración de datos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
                            <p>Apoyar la planificación financiera y la realización de presupuestos</p>
                        </div>
                        <div class="check">
                            <img src="{{asset('/images/check.png')}}">
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
                          Fundador de AgroQlik<br>Ingeniero & MBA<br>
                            Certificado en Qlikview
                        </p>
                        <p>
                            Con más de 15 años de experiencia en las áreas de Control de Gestion, Administración & Finanzas y Operaciones.
                        </p>
                        <p>
                            Jefe de Administración y Finanzas en Empresas Agrícolas y AgroIndustriales.
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
                        <h5>Susana Álvarez</h5>
                        {{-- <br> --}}
                        <p class="description">
                            Ejecutiva Senior<br>Recursos Humanos.
                        </p>
                        <p>
                            Profesional con más de 25 años de experiencia en las áreas de Recursos Humanos y Administración.
                        </p>
                        <p>
                            Senior en Recursos Humanos en empresa de retail y Asistente en Viña “Requingua”.
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
                        <a href="#" class="button button-plan-prueba">Solicita aquí</a>
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
                        <a href="#" class="button button-plan-prueba">Solicita aquí</a>
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
                        <a href="#" class="button button-plan-prueba">Solicita aquí</a>
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
                <h1>Solicite su prueba gratis por 30 días.</h1>
                <a href="" class="button button-plan-prueba">Solicitar</a>
        </div>
    </section>

@endsection
