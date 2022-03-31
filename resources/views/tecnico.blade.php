@extends('layouts.plantilla')

@section('title', 'Técnico Asesoría')

@section('id-page', 'tecnico')

@section('content')
<div id="tecnico-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">ESPECIALIZACIÓN</p>
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
                    <h2 class="--title">TÉCNICO EN <br>
                        <b>ASESORÍA <br>
                        fiscal, laboral <br>
                        y contable</b></h2>
                    <ul>
                        <li><b>Títulos</b> 
                            <ul>
                                <li>Técnico Fiscal</li>
                                <li>Técnico Contable</li>
                                <li>Técnico Laboral</li>
                            </ul>
                        </li>
                        <li><b>Formación técnica</b> 3 meses </li>
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
               <div class="--master_copy_1">
                   <h1 class="--title">¿Quieres trabajar
                    en un despacho profesional?
                    </h1>
                   <p class="--subtitle">FÓRMATE DESDE CERO EN GESTIÓN Y ASESORAMIENTO</p>
                   <p>Encuentra tu sitio en el sector de las asesorías, aunque no tengas experiencia ni formación previa.</p>
                </div>
                <div class="--master_img">
                 <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                </div>
           </div>
           <p class="--title_2">Cuáles son las funciones de un asesor auxiliar</p>
           <div class="--2_columns --2_rows">
               <div class="--master_copy_2">
                   <h3 class="--title_3"><span>- 01.</span> ÁREA FISCAL</h3>
                   <p><b>Llevar la contabilidad al día:</b> libros contables, registros de actividades financieras, informes, balances, etc.</p>
                </div>
               <div class="--master_copy_2">
                   <h3 class="--title_3"><span>- 02.</span> ÁREA LABORAL</h3>
                   <p><b>Gestionar los trámites con la Seguridad y el SEPE:</b> alta de trabajadores, alta de empresarios, contratos, cotización, nóminas, prórrogas, bajas, etc.</p>
                </div>
               <div class="--master_copy_2">
                   <h3 class="--title_3"><span>- 03.</span> ÁREA CONTABLE</h3>
                   <p><b>Presentar los impuestos trimestrales y anuales:</b>  IVA, retenciones, impuesto sobre sociedades, declaraciones de la renta, deducciones, etc. </p>
                </div>
               <div class="--master_img">
                   <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                </div>
        </div>
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">RECURSOS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">Así es la formación de <br>asesor técnico en EDASE</h2>
           <p class="--subtitle">TTE PREPARAMOS PARA ACCEDER AL MERCADO LABORAL</p>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">PROFESORADO <br>EN EJERCICIO</h3>
                   <p>Tus docentes son asesores <br>en activo.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">ESPECIALIZACIÓN</h3>
                   <p>Te formas y consigues experiencia en el ámbito administrativo.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">TECNOLOGÍA</h3>
                   <p>Utilizas las herramientas de nuestros despachos.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title">BOLSA DE EMPLEO</h3>
                   <p>Accedes a ofertas exclusivas en asesorías de toda España.</p>
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
           <h2 class="--title">Da tu primer paso en el sector de la asesoría</h2>
           <p class="--subtitle">ELIGE ESPECIALIZACIÓN</p>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>TÉCNICO</span> FISCAL</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>19 SEMANAS</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>TÉCNICO</span> CONTABLE</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>19 SEMANAS</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos">
                    <p><span>TÉCNICO</span> LABORAL</p>
                </div>
                <div class="--cifras_tabla_item_copy">
                    <p>19 SEMANAS</p>
                </div>
            </div>
        </div>
        <div class="--cta">SOLICITA TU PLAZA</div>
        </div>
    </div>
    <div class="--aside" id="b_programa">
        <div class="--copy">
            <p class="--section_title">FORMACIÓN </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title">¿Cómo vas a aprender?</h2>
           <div class="--3_columns">
               <div class="--programa_copy">
                   <h3 class="--programa_title">CAMPUS VIRTUAL</h3>
                   <p>Podrás ver clases en una plataforma online y aprender a tu ritmo.</p>
               </div>
               <div class="--programa_copy">
                   <h3 class="--programa_title">WEBINARS</h3>
                   <p>Tendrás clases en directo para repasar, corregir ejercicios y resolver dudas.</p>
               </div>
               <div class="--programa_copy">
                   <h3 class="--programa_title">TUTORÍAS PERSONALES</h3>
                   <p>Tus tutores podrán atenderte por teléfono<br> o chat.</p>
               </div>
           </div>
        </div>
    </div>
    <div class="--aside" id="b_practicas">
        <div class="--copy">
            <p class="--section_title">PRACTICAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h2 class="--title">Prácticas adicionales</h2>
            <p class="--subtitle">¡SOLO PARA LOS QUE CURSEN LAS 3 ÁREAS!</p>
            <p class="--text">Si te formas en las 3 especializaciones (fiscal, laboral y contable), podrás hacer prácticas online bajo la supervisión y el respaldo de tus profesores.</p>
            <div class="--2_columns">
                <div class="--practicas_copy">
                    <h3 class="--practicas_title">CASOS REALES</h3>
                    <p>Gestionarás las obligaciones de un ejercicio completo de un autónomo y una sociedad.</p>
                    <h3 class="--practicas_title">EXPERIENCIA AVALADA <br>POR AYUDA T PYMES</h3>
                    <p>Obtendrás un diploma acreditativo por la formación teórica y práctica recibida.</p>
                </div>
                <div class="--practicas_img">
                    <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                 </div>
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
                    <h2 class="--title">Empieza tu<br>
                        <span>especialización <br>
                        técnica</span></h2>
                    <p class="--text">Rellena el formulario o llámanos para impulsar tu carrera profesional y optar por un futuro como asesor experto.</p>
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