@extends('layouts.plantilla')

@section('title', 'MBA')

@section('id-page', 'mba')

@section('content')
<div id="mba-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">MBA ONLINE</p>
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
                    <h2 class="--title">Especialización <br>
                        en <b>DIRECCIÓN <br>
                        ASESORÍAS Y <br>
                        DESPACHOS</b></h2>
                    <ul>
                        <li><b>Formación técnica</b> 9 meses </li>
                        <li><b>Prácticas en empresas</b> 3 meses </li>
                        <li><b>Formación empresarial</b> 6 meses </li>
                        <li><b>Modalidad</b> Online</li>
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
                    <h1 class="--title">Programa MBA<br> en asesoría</h1>
                    <p class="--subtitle">ESTRATEGIA EMPRESARIAL CON LOS DIRECTIVOS DE AYUDA T PYMES</p>
                    <p>Aprovecha tus conocimientos y experiencia para conseguir un puesto directivo o desarrollar un negocio en el <b>mundo de la asesoría.</b></p>
               </div>
           </div>
           <p class="--title_2">¿Por qué es el momento perfecto para formarse en la dirección de asesorías y despachos?</p>
           <div class="--2_columns">
               <div class="--master_copy_2">
                   <h3 class="--title_3"><span>- 01.</span> El 95% de los emprendedores utiliza servicios de asesoramiento</h3>
                   <h3 class="--title_3"><span>- 02.</span> Crecen las oportunidades en el sector de la asesoría</h3>
                   <h3 class="--title_3"><span>- 03.</span> El mercado demanda perfiles directivos</h3>
                </div>
               <div class="--master_img">
                   <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                </div>
        </div>
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">recursos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Empieza tu plan de acción<br> en el MBA Online</h2>
           <p class="--subtitle">TE DOTAMOS DE TODOS LOS RECURSOS NECESARIOS PARA PROYECTAR TU FUTURO COMO DIRECTIVO O IMPULSAR LA CREACIÓN DE TU ASESORÍA</p>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">ESTRATEGIA <br>FORMATIVA</h3>
                   <p>Fortalece tus competencias.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">FORMACIÓN <br>CONTINUA</h3>
                   <p>No te pierdas ninguna novedad.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">BOLSA DE EMPLEO</h3>
                   <p>Contacta con empresas de toda España.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">TECNOLOGÍA Y <br>OUTSOURCING</h3>
                   <p>Proporciona a tus clientes el mejor servicio.</p>
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
           <h2 class="--title">¿Qué incluye la estrategia formativa del MBA?</h2>
           <p class="--subtitle">GESTIÓN Y DIRECCIÓN EMPRESARIAL</p>
               <div class="--descubre_copy">
                   <h3 class="--descubre_title">9 MESES de especialización <br>Fiscal, laboral y contable</h3>
                   <p>Profesionales en activo te formarán con una visión global y actualizada del sector.</p>
                   <h3 class="--descubre_title">3 MESES de prácticas <br>Online o presencial</h3>
                   <p>Podrás realizar prácticas voluntarias en Ayuda T Pymes.</p>
                   <h3 class="--descubre_title">6 MESES de aprendizaje empresarial <br>Con los directivos de la asesoría líder en España</h3>
                   <p>Ampliarás tus conocimientos sobre las áreas más importantes de tu negocio.</p>
                   <h3 class="--descubre_title">Te ayudamos a crear una asesoría rentable</h3>
                   <p>Apuesta desde el primer momento por la atención al cliente.</p>
                   <h3 class="--descubre_title">La tecnología de nuestros despachos te permitirá ofrecer un servicio eficiente</h3>
                   <h3 class="--descubre_title">Los asesores de Ayuda T Pymes serán tu equipo de producción</h3>
               </div>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>+</span>500</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Asesorías usuarias de nuestra tecnología</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>+</span>100</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Asesorías creadas con la ayuda de EDASE</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>+</span>300</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>Aspecialistas para externalizar tus servicios</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="--aside" id="b_programa">
        <div class="--copy">
            <p class="--section_title">actualización </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Con el MBA de EDASE no dejarás de actualizar tu perfil</h2>
           <div class="--3_columns">
               <div class="--programa_copy">
                   <h3 class="--programa_title">FORMACIÓN <br>CONTINUA</h3>
                   <p>Tendrás el acceso a una plataforma de vídeos para profesionales.</p>
               </div>
               <div class="--programa_copy">
                   <h3 class="--programa_title">CONSULTORÍA <br>EMPRESARIAL</h3>
                   <p>Un equipo de expertos te asesorará y resolverá todas tus dudas durante 18 meses.</p>
               </div>
           </div>
           <div class="--cta_sub">DESCARGAR</div>
           <div class="--cta">PROGRAMA</div>
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
                        AL <span>MBA <br>
                        ONLINE</span></h2>
                    <p class="--text">Rellena el formulario o llámanos para acceder al programa de MBA y empezar a transformar tu futuro profesional.</p>
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