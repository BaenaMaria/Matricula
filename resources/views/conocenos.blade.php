@extends('layouts.plantilla')

@section('title', 'Conocenos')

@section('id-page', 'conocenos')

@section('content')
<div id="conocenos-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">Conócenos</h1>
        </div>
    </div>
    <div class="--aside" id="b_lideres">
        <div class="--copy">
            <p class="--section_title">líderes</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--lideres_title">Somos escuela <br>
            <b>y despacho<br> profesional</b></h2>
            <p class="--lideres_subtitle"><span>+</span> LÍDERES EN NUESTRO SECTOR</p>
            <p class="--lideres_copy">De nuestra experiencia trabajando con clientes de toda España nace la primera escuela especializada en asesoría. </p>
        </div>
    </div>

    <div class="--aside" id="b_compromiso">
        <div class="--copy">
            <p class="--section_title"></p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--compromiso_title">Nuestro compromiso educativo se basa en la experiencia práctica y real</h2>
           <div class="--compromiso_copy">
               <div class="--compromiso_text">
                   <p>Ponemos el foco en darles a nuestros alumnos el control de los procesos, trámites y herramientas que necesitan para avanzar y escalar en su trabajo.</p>
               </div>
               <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="">
           </div>
        </div>
    </div>
    <div class="--aside" id="b_historia">
        <div class="--copy">
            <p class="--section_title"></p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--historia_title">La historia de <br>Ayuda T Pymes <br>es nuestra historia</h2>
           <div class="--transition_niveles" id="__transition_niveles">
            <div class="--content_transition" data="1">
                <div class="--b_date_transition">
                    <p class="--active" data="1">2009</p>
                    <p data="2">2015</p>
                    <p data="3">2018</p>
                    <p data="4">2018</p>
                    <p data="5">2019</p>
                    <p data="6">2020</p>
                    <p data="7">2020</p>
                    <p data="8">2021</p>
                    <p data="9">2022</p>
                </div>
                <div class="--b_title_transition">
                    <h3 class="--active" data="1">Empezamos como asesoría online</h3>
                    <h3 data="2">Reconocen nuestra trayectoria empresarial</h3>
                    <h3 data="3">Creamos la Escuela de Asesores</h3>
                    <h3 data="4"> Lanzamos el Máster Asesor Experto</h3>
                    <h3 data="5">Tenemos 12.000 clientes</h3>
                    <h3 data="6">Celebramos nuestro 10º aniversario</h3>
                    <h3 data="7">Incorporamos a más de 500 alumnos al sector</h3>
                    <h3 data="8">Lanzamos el Curso técnico laboral y contable</h3>
                    <h3 data="9">Seguimos creciendo</h3>
                </div>
                <div class="--b_copy_transition">
                    <p class="--active" data="1">Ofreciendo servicios a autónomos y pymes de toda España</p>
                    <p data="2">En los premios organizados por la Asociación de Jóvenes Empresarios</p>
                    <p data="3">Después de comprobar la necesidad de perfiles especializados</p>
                    <p data="4">Basado en la metodología con la que formamos a nuestros trabajadores</p>
                    <p data="5">Ya contamos con más de 350 especialistas en el equipo.</p>
                    <p data="6">Los primeros 10 años de Ayuda T Pymes como asesoría y empresa tecnológica.</p>
                    <p data="7">Profesionales que han elegido formarse en nuestra Escuela de Asesores.</p>
                    <p data="8">En busca de impulsar la integración laboral de todo tipo de perfiles.</p>
                    <p data="9">Más de 15.000 clientes de toda España ya confían en nuestros servicios.</p>
                </div>
            </div>
            <div class="--b_foto_transition">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="1" class="--active">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="2">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="3">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="4">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="5">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="6">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="7">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="8">
                <img src="{{ URL::to('/') }}/images/conocenos/foto-6.jpg" alt="" data="9">
            </div>
            <div class="--mascara_transition">
            </div>
            <div class="--progress_transition" data="1"></div>
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
    <div class="--aside" id="b_equipo">
        <div class="--copy">
            <p class="--section_title">EQUIPO </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h3 class="--equipo_title">Equipo de la escuela</h3>
            <div class="--equipo_column">
                <p><span>+</span> <b>CARMEN MORENO</b><br> Directora</p>
                <p><span>+</span> <b>VANESSA ROMERO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>MARÍA JOSE CASTRO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>INMACULADA VIDAL</b><br> Asesora de formación</p>
                <p><span>+</span> <b>VIRGINIA DÍAZ</b><br> Asesora de formación</p>
                <p><span>+</span> <b>ÁNGELA DÍAZ</b><br> Consultora de despachos</p>
            </div>
            <div class="--equipo_column">
                <p><span>+</span> <b>CARMEN MORENO</b><br> Directora</p>
                <p><span>+</span> <b>VANESSA ROMERO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>MARÍA JOSE CASTRO</b><br> Asesora de formación</p>
                <p><span>+</span> <b>INMACULADA VIDAL</b><br> Asesora de formación</p>
                <p><span>+</span> <b>VIRGINIA DÍAZ</b><br> Asesora de formación</p>
                <p><span>+</span> <b>ÁNGELA DÍAZ</b><br> Consultora de despachos</p>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_vida">
        <div class="--copy">
            <p class="--section_title">la vida en el campus</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h3 class="--vida_title">alumnos & <span>lorem ipsum</span></h3>
            <div class="--vida_bloque">
               <div class="--vida_fila_1">
                    <div class="--vida_fila_1_div_1">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_1_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_1_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                </div>
                <div class="--vida_fila_2">
                    <div class="--vida_fila_2_div_1">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_2_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_2_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_2_div_4">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
                    <div class="--vida_fila_2_div_5">
                        <img src="{{ URL::to('/') }}/images/conocenos/foto-5.jpg" alt="" class="--equipo_foto_1">
                    </div>
               </div>
            </div>
        </div>
    </div>

    <script>
        moveTransitionHistoria();
        moveProfesores();
    </script>
</div>
@endsection