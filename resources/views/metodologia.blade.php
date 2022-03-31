@extends('layouts.plantilla')

@section('title', 'Metodologia')

@section('id-page', 'metodologia')

@section('content')
<div id="metodologia-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">Metodología</h1>
        </div>
    </div>
    <div class="--aside" id="b_pilares">
        <div class="--copy">
            <p class="--section_title">NUESTROS PILARES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">ESTUDIAR EN <b>EDASE</b></h2>
           <h2 class="--subtitle">LA ESCUELA DE ASESORES APUESTA POR<br>UNA METODOLOGÍA <b>BASADA EN 3 PILARES:</b></h2>
           <div class="--2_columns">
               <div class="--pilares_bloque_copy">
                <h3 class="--pilares_bloque_copy_title">- Empleabilidad real</h3>
                <p class="--pilares_boque_copy_text">Desarrollas habilidades para adaptarte a la demanda actual del sector.</p>
                <h3 class="--pilares_bloque_copy_title">- Experiencia práctica</h3>
                <p class="--pilares_boque_copy_text">Aplicas los conocimientos en casos reales utilizando la tecnología de nuestros despachos.</p>
                <h3 class="--pilares_bloque_copy_title">- Apoyo profesional</h3>
                <p class="--pilares_boque_copy_text">Cuentas con el apoyo permanente de especialistas en las distintas materias</p>
               </div>
               <div class="--pilares_bloque_img">
                    <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_especialistas">
        <div class="--copy">
            
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--especialistas_bloque_title">
                <h2 class="--title">Te enseñan especialistas en activo</h2>
               </div>
               <div class="--especialistas_bloque_copy_1">
                   <p class="--text_1">El profesorado compatibiliza su labor docente con su actividad profesional para conocer las necesidades de empresas y asesorías.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--especialistas_bloque_img">
                <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
               </div>
               <div class="--especialistas_bloque_copy_2">
                <h3 class="--pilares_bloque_copy_title">- SERVICIOS DE TUTORÍAS</h3>
                <p class="--pilares_boque_copy_text">Resuelven todas tus consultas a través de tutorías online, teléfono o chat.</p>
                <h3 class="--pilares_bloque_copy_title">- COACHING</h3>
                <p class="--pilares_boque_copy_text">Trazan una ruta de aprendizaje personal dirigida a tus objetivos</p>
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_experiencias">
        <div class="--copy">
            <p class="--section_title">EXPERIENCIAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--experiencias_bloque_title">
                <h2 class="--title">Casos 100% prácticos</h2>
               </div>
               <div class="--experiencias_bloque_copy_1">
                   <p class="--text_1">Los alumnos resuelven casos de clientes reales bajo supervisión para obtener el control práctico de todos los procesos, trámites y herramientas.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--experiencias_bloque_copy">
                   <p class="--quote">“<b>Me han dado la seguridad que antes no tenía</b> a la hora de trabajar”</p>
                   <p class="--author">José Miguel Molina</p>
               </div>
               <div class="--experiencias_bloque_img">
                <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
               </div>
           </div>
           <div class="--2_columns">
               <div class="--experiencias_bloque_img">
                   <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                </div>
                <div class="--experiencias_bloque_copy">
                    <p class="--quote">“Te ayudan realmente a mejorar y a <b>entender el mundo de la asesoría</b>”</p>
                    <p class="--author">Lucía Alcaraz Fornes</p>
                </div>
           </div>
        </div>
    </div>

    

    <script>

    </script>
</div>
@endsection