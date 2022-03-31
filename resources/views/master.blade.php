@extends('layouts.plantilla')

@section('title', 'Master')

@section('id-page', 'master')

@section('content')
<div id="master-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">MÁSTER ASESOR EXPERTO</p>
        </div>
    </div>
    <div class="--aside" id="b_formulario">
        <div class="--copy">
            <p class="--section_title">TITULACIONES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--formulario_claim">
                    <h2 class="--title">Fiscal,<br>
                        Laboral <br>
                        y Contable</h2>
                    <ul>
                        <li><b>Formación técnica</b> 9 meses </li>
                        <li><b>Prácticas en empresas</b> 3 meses </li>
                        <li><b>Experiencia total certificada</b> 1 año </li>
                        <li><b>Modalidad</b> Online, presencial u streaming</li>
                    </ul>
               </div>
               <div class="--formulario_form">
                    <p class="--form_title">Muy pronto próxima convocatoria</p>
                    <p class="--form_extra">¡PLAZAS LIMITADAS!</p>
                    @include('layouts.form-cabecera')
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_master">
        <div class="--copy">
            
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--master_img">
                <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
               </div>
               <div class="--master_copy_1">
                    <h1 class="--title">Máster<br> Asesoría</h1>
                    <p class="--subtitle">IMPARTIDO POR LOS PROFESIONALES DE LA ASESORÍA Nº1 EN ESPAÑA</p>
                    <p>Fórmate en el asesoramiento para empresas y autónomos con los líderes del sector desde un enfoque multidisciplinar y tecnológico. </p>
               </div>
           </div>
           <p class="--title_2">Qué distingue al máster de asesoría fiscal, laboral y contable de EDASE</p>
           <div class="--2_columns --2_rows">
               <div class="--master_copy_2">
                   <h3 class="--title_3">- VISIÓN 360º</h3>
                   <p>Te especializamos en las tres áreas de trabajo.</p>
                </div>
               <div class="--master_copy_2">
                   <h3 class="--title_3">- CONTROL PRÁCTICO</h3>
                   <p>Te damos la oportunidad de poner en práctica tus conocimientos.</p>
                </div>
               <div class="--master_copy_2">
                   <h3 class="--title_3">- PROFESORADO</h3>
                   <p>Tus docentes son especialistas en activo.</p>
                </div>
               <div class="--master_img">
                   <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                </div>
        </div>
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">Objetivos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Objetivos</h2>
           <p class="--subtitle">Te preparamos para<br> tu futuro profesional</p>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">TRABAJAR <br><span>COMO ASESOR</span></h3>
                   <p>Si has cursado estudios relacionados.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">AVANZAR <br><span>EN TU CARRERA</span></h3>
                   <p>Si has trabajado o está trabajando en el sector.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">EMPRENDER <br><span>UNA ASESORÍA</span></h3>
                   <p>Si te gustaría autoemplearte.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">MEJORAR <br><span>TU NEGOCIO</span></h3>
                   <p>Si quieres mejorar tus servicios.</p>
               </div>
           </div>
           <div class="--cta">SOLICITA TU PLAZA</div>
        </div>
    </div>
    <div class="--aside" id="b_descubre">
        <div class="--copy">
            <p class="--section_title">DESCUBRE</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">¿Cómo es nuestro máster en asesoría de empresas?</h2>
           <p class="--subtitle">DESCUBRE TODO LO QUE INCLUYE</p>
           <div class="--2_columns">
               <div class="--descubre_copy">
                   <h3 class="--descubre_title">Bolsa de empleo</h3>
                   <p>Ofertas exclusivas en todo el país.</p>
                   <h3 class="--descubre_title">Campus virtual</h3>
                   <p>Contenido en vídeo disponible 24/7.</p>
                   <h3 class="--descubre_title">Clases en directo</h3>
                   <p>Sesiones con profesores y alumnos.</p>
                   <h3 class="--descubre_title">Tutorías personales</h3>
                   <p>Atención individual y directa.</p>
               </div>
               <div class="--descubre_copy">
                   <h3 class="--descubre_title">Acceso a herramientas</h3>
                   <p>Ejercicios utilizando la última tecnología.</p>
                   <h3 class="--descubre_title">Formación continua</h3>
                   <p>Plataforma de actualidad para asesores.</p>
                   <h3 class="--descubre_title">Diploma acreditativo</h3>
                   <p>12 meses de experiencia avalada por Ayuda T Pymes.</p>
               </div>
           </div>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>+</span>500</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Nuevos alumnos del máster asesor experto en el último año</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p>95,2<span>%</span></p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Tasa de ocupación de los asesores formados</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p>70<span>%</span></p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Compatibilizan el trabajo con la formación</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="--aside" id="b_programa">
        <div class="--copy">
            <p class="--section_title">PROGRAMA </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Plan de estudios</h2>
           <p class="--subtitle">LA FORMACIÓN TÉCNICA<br>
            SE DIVIDE EN LAS <b>TRES ÁREAS</b></p>
           <div class="--3_columns">
               <div class="--programa_copy">
                   <h3 class="--programa_title">LABORAL</h3>
                   <p>Aprenderás a gestionar y asesorar a tus clientes sobre todas las obligaciones del derecho laboral.</p>
               </div>
               <div class="--programa_copy">
                   <h3 class="--programa_title">CONTABLE</h3>
                   <p>Descubrirás desde dentro cómo trabaja un departamento contable y cómo funciona su organización. </p>
               </div>
               <div class="--programa_copy">
                   <h3 class="--programa_title">FISCAL</h3>
                   <p>Conseguirás controlar todos los procedimientos fiscales que afectan a autónomos y empresas.</p>
               </div>
           </div>
           <div class="--cta_sub">DESCARGAR</div>
           <div class="--cta">PROGRAMA</div>
        </div>
    </div>
    <div class="--aside" id="b_practicas">
        <div class="--copy">
            <p class="--section_title">PRACTICAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Prácticas aseguradas</h2>
           <p class="--subtitle">TE CONECTAMOS CON EL MERCADO LABORAL</p>
           <h2 class="--title_2">Modalidades</h2>
           <p class="--subtitle_2"><b>3 tipos</b> de convocatorias</p>
           <div class="--transition_niveles" id="__transition_niveles">
            <div class="--content_transition" data="1">
                <div class="--b_title_transition">
                    <h3 class="--active" data="1">Online</h3>
                    <h3 data="2">Presencial</h3>
                    <h3 data="3">Streaming</h3>
                </div>
                <div class="--b_copy_transition">
                    <p class="--active" data="1">Convocatorias ordinarias donde te formamos en 12 meses a través del campus virtual, prácticas y clases en directo con los tutores.</p>
                    <p data="2"><b>PRÓXIMAMENTE.</b> Convocatorias intensivas de 5 meses en nuestra sede central, donde conocemos todo tu potencial en persona. </p>
                    <p data="3"><b>PRÓXIMAMENTE.</b> Convocatorias intensivas de 5 meses, donde puedes seguir las clases en directo desde cualquier lugar de España.</p>

                </div>
            </div>
            <div class="--b_foto_transition">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="1" class="--active">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="2">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="3">
            </div>
            <div class="--mascara_transition">
            </div>
            <div class="--progress_transition" data="1"></div>
        </div>
        </div>
    </div>
    
    <div class="--aside" id="b_formulario_footer">
        <div class="--copy">
            <p class="--section_title">FORMULARIO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--formulario_claim">
                   <p class="--subtitle">ACCESO <span>Y ADMISIÓN</span></p>
                    <h2 class="--title">ÚNETE<br>
                        AL MÁSTER <br>
                        <span>ASESOR <br>
                        EXPERTO</span></h2>
                    <p class="--text">Rellena el formulario o llámanos para acceder al máster y ser parte de nuestra cantera de asesores. </p>
               </div>
               <div class="--formulario_form">
                    <p class="--form_title">Muy pronto próxima convocatoria</p>
                    <p class="--form_extra">¡PLAZAS LIMITADAS!</p>
                    @include('layouts.form-footer')
               </div>
           </div>
        </div>
    </div>

</div>
@endsection