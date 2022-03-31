@extends('layouts.plantilla')

@section('title', 'Home')

@section('id-page', 'home')

@section('content')
    <div id="home-page">
        <div id="b_cabecera">
            <video autoplay muted loop id="myVideo">
                <source src="/images/HOME_EDASE.mp4" type="video/mp4">
              </video>
            <div class="--copy">
                <h2 class="--title">Tu<br>
                    futuro
                    <b>empieza
                    <span>aquí</span></b></h2>
                <h1 class="--subtitle">Escuela de formación para asesores del mañana</h1>
            </div>
            <div class="--arrow">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="">
            </div>
        </div>
        <div class="--aside" id="b_creamos">
            <div class="--copy">
                <p class="--section_title">creamos escuela</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <h2 class="--title">CREAMOS<br> ESCUELA</h2>
                <div class="--subaside_1">
                    <div class="--subaside_1_copy">
                        <ul>
                            <li data="1"><span>13</span> AÑOS DE EXPERIENCIA</li>
                            <li data="2"><span>350</span> TRABAJADORES</li>
                            <li data="3"><span>15000</span> CLIENTES</li>
                        </ul>
                    </div>
                    <div class="--subaside_1_carrousel">
                        <div class="--container_carrousel" id="__container_carrousel">
                            <span id="__page_carrousel"><span>1</span>/4</span>
                            <div class="--b_title_carrousel">
                                <h3 class="--active" data="1">Somos la asesoría que más crece en España</h3>
                                <h3 data="2">La formación es el motor de nuestro crecimiento</h3>
                                <h3 data="3">En contacto con la realidad de autónomos y pymes</h3>
                                <h3 data="4">Compartimos nuestras competencias como empresa líder</h3>
                            </div>
                            <div class="--b_copy_carrousel">
                                <p class="--active" data="1">Ayuda T Pymes es la 1º asesoría que ha revolucionado el asesoramiento llevando la tecnología a todos los procesos.</p>
                                <p data="2">Hemos formado a toda nuestra plantilla desde sus inicios con la misma metodología y contenidos.</p>
                                <p data="3">Nos actualizamos día a día con las nuevas necesidades que van surgiendo.</p>
                                <p data="4">Ya no valen las teorías. Los clientes quieren soluciones rápidas y eficientes.</p>
                            </div>
                            <div class="--franja_carrousel" data="1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_niveles">
            <div class="--copy">
                <p class="--section_title">niveles</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">niveles</p>
                <div class="--content_copy">
                    <h2 class="--title">Preparamos<br> a profesionales<br> de la asesoría a todos<br> los niveles</h2>
                </div>
                <div class="--transition_niveles" id="__transition_niveles">
                    <div class="--content_transition" data="1">
                        <div class="--b_title_transition">
                            <h3 class="--active" data="1">Sin conocimientos ni experiencia previa</h3>
                            <h3 data="2">Con conocimientos</h3>
                            <h3 data="3">Con experiencia</h3>
                            <h3 data="4">Con servicios de asesoramiento</h3>
                        </div>
                        <div class="--b_copy_transition">
                            <p class="--active" data="1">Encuentra tu sitio partiendo de cero</p>
                            <p data="2">Da el salto en tu carrera y trabaja como asesor experto</p>
                            <p data="3">Consigue un puesto directivo o abre tu propia asesoría</p>
                            <p data="4">Proyecta el futuro de tu negocio con las últimas novedades</p>
                        </div>
                    </div>
                    <div class="--mascara_transition">
                    </div>
                    <div class="--progress_transition" data="1"></div>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_experiencias">
            <div class="--copy">
                <p class="--section_title">EXPERIENCIAS </p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">EXPERIENCIAS</p>
                <div class="--testimonios__1" data="1" id="__testimonios__1">
                    <div class="--content_testimonios --visible" data="1">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. <b>Esto es como jugar en el Real Madrid”</b></p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_franja"></div>
                    </div>
                    <div class="--content_testimonios" data="2">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. Esto es como jugar en el Real Madrid”</p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_franja"></div>
                    </div>
                    <div class="--content_testimonios d-lg-none" data="3">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. Esto es como jugar en el Real Madrid”</p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_franja"></div>
                    </div>
                    <div class="--content_testimonios d-lg-none" data="4">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. Esto es como jugar en el Real Madrid”</p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_franja"></div>
                    </div>
                </div>

                <div class="--testimonios__2 d-none d-xl-block" data="1" id="__testimonios__2">
                    <div class="--content_testimonios --visible" data="1">
                        <div class="--content_testimonios_franja"></div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. <b>Esto es como jugar en el Real Madrid”</b></p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div> 
                    </div>
                    <div class="--content_testimonios" data="2">
                        <div class="--content_testimonios_franja"></div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="">
                        </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. Esto es como jugar en el Real Madrid”</p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="--aside" id="b_profesorado">
            <div class="--copy">
                <p class="--section_title">PROFESORADO </p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">PROFESORADO</p>
                <div class="--profesorado" data="1">
                    <div class="--profesorado_content_1">
                        <div class="--profesorado_foto_principal">
                            <div class="--profesorado_mascara_img_principal" data="1">
                                
                            </div>
                            <div class="--profesorado_mascara_img_principal" data="2">
                                
                            </div>
                            <div class="--profesorado_mascara_img_principal" data="3">
                                
                            </div>
                        </div>
                        <div class="--profesorado_copy" data="1">
                            <p class="--profesorado_nombre" data="1">Cristina Castell</p>
                            <p class="--profesorado_cargo" data="1">Profesora y responsable fiscal</p>
                        </div>
                        <div class="--profesorado_copy" data="2" style="display: none">
                            <p class="--profesorado_nombre" data="2">Cristina Marin</p>
                            <p class="--profesorado_cargo" data="2">Profesora y responsable fiscal</p>
                        </div>
                        <div class="--profesorado_copy" data="3" style="display: none">
                            <p class="--profesorado_nombre" data="3">María José Izquierdo</p>
                            <p class="--profesorado_cargo" data="3">Profesora y responsable fiscal</p>
                        </div>
                    </div>
                    <div class="--profesorado_content_2">
                        <div class="--profesorado_foto_secundaria">
                            <div class="--profesorado_mascara_img_secundaria" data="1"></div>
                            <div class="--profesorado_mascara_img_secundaria" data="2"></div>
                            <div class="--profesorado_mascara_img_secundaria" data="3"></div>
                        </div>
                        <div class="--profesorado_texto" data="1">
                            <p>Licenciada en Derecho, en Administración y Dirección de Empresas. Ha trabajado durante años como asesora en departamentos de contabilidad y fiscalidad antes de especializarse en la formación. <b>Actualmente es profesora y coordinadora del dpto. de asesoría fiscal y laboral de Ayuda T Pymes, con más de 65 personas a su cargo.</b></p>
                        </div>
                        <div class="--profesorado_texto" data="2" style="display: none">
                            <p>Licenciada en Derecho, en Administración y Dirección de Empresas. Ha trabajado durante años como asesora en departamentos de contabilidad y fiscalidad antes de especializarse en la formación. Actualmente es profesora y coordinadora del dpto. de asesoría fiscal y laboral de Ayuda T Pymes, con más de 65 personas a su cargo.</p>
                        </div>
                        <div class="--profesorado_texto" data="3" style="display: none">
                            <p>Licenciada en Derecho, en Administración y Dirección de Empresas. Ha trabajado durante años como asesora en departamentos de contabilidad y fiscalidad antes de especializarse en la formación. Actualmente es profesora y coordinadora del dpto. de asesoría fiscal y laboral de Ayuda T Pymes, con más de 65 personas a su cargo.</p>
                        </div>
                        <div class="--profesorado_bloque" data="1"></div>
                    </div>
                    <div class="--profesorado_franja" data="1"></div>
                </div>
            </div>
        </div>

        <div class="--aside" id="b_huella">
            <div class="--content">
                <div class="--huella_claim">
                    <h2 class="--huella_title">Estudiar.<br>
                        Superarse.<br>
                        <span>dejar huella</span></h2>
                </div>
                <div class="--huella_copy">
                    <p class="--huella_subtitle">
                        EL <span>70%</span> DE NUESTROS ALUMNOS COMPATIBILIZA SU TRABAJO CON LA FORMACIÓN 
                    </p>
                    <p class="--huella_text">
                        Tenemos una metodología flexible que te permite organizar tu tiempo de estudio 
                    </p>
                </div>
                <div class="--huella_img">
                    <div class="--huella_img_mascara">
                        <img src="{{ URL::to('/') }}/images/foto-3.jpg" alt="">
                        <div class="--huella_franja"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        moveCarrousel();
        moveTransition();
        moveTestimonios();
        moveProfesores();
    </script>
@endsection
