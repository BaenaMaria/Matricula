@extends('layouts.plantilla')

@section('title', 'Admisión y BECAS')

@section('id-page', 'becas')

@section('content')
    <div id="becas-page">
        <div id="b_cabecera">
            <div class="--copy">
                <h1 class="--title">admisión y becas</h1>
            </div>
        </div>
        <div class="--aside" id="b_admisiones">
            <div class="--copy">
                <p class="--section_title">admisiones</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <h2 class="--title">Bienvenid@ al portal<br>
                    de admisiones de <b>EDASE</b></h2>
                <p class="--subtitle">ENVÍA TU AUTOMATRÍCULA Y UN FORMADOR SE PONDRÁ EN CONTACTO CONTIGO <b>EN MENOS DE
                        24 HORAS.</b></p>
                <div class="--admision_bloque_formulario">
                    <form action="{{route('crearPDF')}}" method="POST" name="admision_form" id="admision_form">
                        @csrf
                        <div class="--form_bloque">
                            <input type="text" name="name_input" id="name_input" placeholder="Nombre y apellidos">
                        </div>
                        <div class="--form_bloque">
                            <input type="email" name="email_input" id="email_input" placeholder="Email" required>
                        </div>
                        <div class="--form_bloque">
                            <input type="text" name="phone_input" id="phone_input" placeholder="Teléfono">
                        </div>
                        <div class="--form_bloque --plan_estudios_input">
                            <label for="plan_estudios_input">
                                <b>Selección del Plan de Estudios</b>
                            </label>
                            <select name="plan_estudios_input" id="plan_estudios_input">
                                <option value="Master Asesor Experto">Master Asesor Experto (modalidad: online, presencial, streaming)
                                </option>
                                <option value="Técnico contable">Técnico Asesoría Contable (modalidad: online)</option>
                                <option value="Técnico fiscal">Técnico Asesoría Fiscal (modalidad: online)</option>
                                <option value="Técnico laboral">Técnico Asesoría Laboral (modalidad: online)</option>
                                <option value="MBA">MBA (modalidad: online)</option>
                            </select>
                        </div>

                        <div class="--form_bloque --metodo_pago_input">
                            <label for="metodo_pago_input">
                                <b>Selección del método de pago</b>
                            </label>

                            <div class="form-check">
                                <p><input class="form-check-input" type="radio" name="pagoIntegro" id="pagoIntegro"
                                    value="Pago íntegro">Pago íntegro</p>
                            </div>
                            <div class="form-check">
                                <p><input class="form-check-input" type="radio" name="financiacion" id="financiacion"
                                    value="Financiado">Financiación</p>


                                <div class="hidden financiacion" style="display: block;">

                                    <div class="form-group" id="divFecha">
                                        <label class="control-label col-sm-2" for="dateI">Mes de inicio:</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dateI" placeholder="Mes de inicio"
                                                name="dateI">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group" id="divCuota">
                                        <label class="control-label col-sm-2" for="cuotaTramo">Cuota elegida:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="cuotaTramo" id="cuotaTramo">
                                                <option value=""></option>
                                                <option value="3 meses">3 meses</option>
                                                <option value="6 meses">6 meses</option>
                                                <option value="12 meses">12 meses</option>
                                                <option value="18 meses">18 meses</option>
                                                <option value="24 meses">24 meses</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="--form_bloque --datos_faturacion_input">
                                <label for="datos_faturacion">
                                    <b>Datos de facturación</b>
                                </label>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="DNI">DNI:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="DNI" placeholder="DNI o NIE"
                                            name="DNI">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="numCuentaFacT">Número de cuenta:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="numCuenta"
                                            placeholder="Número de cuenta" name="numCuenta">
                                    </div>
                                </div>


                            </div>

                            <!--FORMACION-->
                            <div class="--form_bloque --formacion_previa_input">
                                <label for="formacion_previa_input">
                                    <b>¿Tienes formación previa o experiencia relacionada con la asesoría y la gestión de
                                        empresas?</b> ADE, derecho, contabilidad, finanzas, rrhh, relaciones laborales,
                                    administración, economía, tributación, etc. <span>[Seleccionar una]</span>
                                </label>
                                <p><input type="radio" name="formacion_previa_input" value="fiscal, laboral y/o contable">Tengo experiencia como asesor fiscal,
                                    laboral y/o contable.</p>
                                <p><input type="radio" name="formacion_previa_input" value="estudios gestión y asesoría">Tengo estudios universitarios o de
                                    posgrado
                                    en algún área relacionada con la gestión y la asesoría.</p>
                                <p><input type="radio" name="formacion_previa_input" value="FP gestión">Cuento con formación profesional, de
                                    grado
                                    medio o superior, relacionada con la gestión.</p>
                                <p><input type="radio" name="formacion_previa_input" value="No experiencia">No tengo experiencia ni estudios
                                    relacionados.</p>
                            </div>
                            <!--OBJETIVO-->
                            <div class="--form_bloque --objetivo_input">
                                <label for="objetivo_input">
                                    <b>Tu objetivo <span>[Seleccionar una]</span></b>
                                </label>
                                <p><input type="radio" name="objetivo_input" value="Carrera como directivo">Quiero prepararme para desarrollar mi carrera
                                    como
                                    directivo en el sector.</p>
                                <p><input type="radio" name="objetivo_input" value="Emprender">Quiero emprender y montar mi propio despacho o
                                    asesoría.</p>
                                <p><input type="radio" name="objetivo_input" value="Acceder a bolsa">Quiero formarme para trabajar como asesor y
                                    acceder
                                    a la bolsa de empleo.</p>
                                <p><input type="radio" name="objetivo_input" value="Ampliar conocimiento">Quiero reciclar mi perfil profesional y ampliar
                                    mis
                                    áreas de conocimiento.</p>
                            </div>
                            <!--FIRMA-->
                            <div class='centrador'>
                                <canvas id='canvas' width="200" height="200" style='border: 1px solid #CCC;'>
                                <p>Tu navegador no soporta canvas</p>
                                </canvas>
                            </div>
                            <div class='centrador'>
                                <form id='formCanvas' method='post' action='#' ENCTYPE='multipart/form-data'>
                                <button type='button' name ='btn_1' onclick='LimpiarTrazado()'>Borrar</button>
                                <button type='button'name ='btn-2' onclick='GuardarTrazado()'>Guardar</button>
                                <input type='hidden' name='imagen' id='imagen' />
                                </form>
                            </div>

                            <script type="text/javascript">
                            /* Variables de Configuracion */
                            var idCanvas='canvas';
                            var idForm='formCanvas';
                            var inputImagen='imagen';
                            var estiloDelCursor='crosshair';
                            var colorDelTrazo='#555';
                            var colorDeFondo='#fff';
                            var grosorDelTrazo=2;

                            /* Variables necesarias */
                            var contexto=null;
                            var valX=0;
                            var valY=0;
                            var flag=false;
                            var imagen=document.getElementById(inputImagen);
                            var anchoCanvas=document.getElementById(idCanvas).offsetWidth;
                            var altoCanvas=document.getElementById(idCanvas).offsetHeight;
                            var pizarraCanvas=document.getElementById(idCanvas);

                            /* Esperamos el evento load */
                            window.addEventListener('load',IniciarDibujo,false);

                            function IniciarDibujo(){
                                /* Creamos la pizarra */
                                pizarraCanvas.style.cursor=estiloDelCursor;
                                contexto=pizarraCanvas.getContext('2d');
                                contexto.fillStyle=colorDeFondo;
                                contexto.fillRect(0,0,anchoCanvas,altoCanvas);
                                contexto.strokeStyle=colorDelTrazo;
                                contexto.lineWidth=grosorDelTrazo;
                                contexto.lineJoin='round';
                                contexto.lineCap='round';
                                /* Capturamos los diferentes eventos */
                                pizarraCanvas.addEventListener('mousedown',MouseDown,false);
                                pizarraCanvas.addEventListener('mouseup',MouseUp,false);
                                pizarraCanvas.addEventListener('mousemove',MouseMove,false);
                                pizarraCanvas.addEventListener('touchstart',TouchStart,false);
                                pizarraCanvas.addEventListener('touchmove',TouchMove,false);
                                pizarraCanvas.addEventListener('touchend',TouchEnd,false);
                                pizarraCanvas.addEventListener('touchleave',TouchEnd,false);
                            }

                            function MouseDown(e){
                                flag=true;
                                contexto.beginPath();
                                valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
                                contexto.moveTo(valX,valY);
                            }

                            function MouseUp(e){
                                contexto.closePath();
                                flag=false;
                            }

                            function MouseMove(e){
                                if(flag){
                                contexto.beginPath();
                                contexto.moveTo(valX,valY);
                                valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
                                contexto.lineTo(valX,valY);
                                contexto.closePath();
                                contexto.stroke();
                                }
                            }

                            function TouchMove(e){
                                e.preventDefault();
                                if (e.targetTouches.length == 1) {
                                var touch = e.targetTouches[0];
                                MouseMove(touch);
                                }
                            }

                            function TouchStart(e){
                                if (e.targetTouches.length == 1) {
                                var touch = e.targetTouches[0];
                                MouseDown(touch);
                                }
                            }

                            function TouchEnd(e){
                                if (e.targetTouches.length == 1) {
                                var touch = e.targetTouches[0];
                                MouseUp(touch);
                                }
                            }

                            function posicionY(obj) {
                                var valor = obj.offsetTop;
                                if (obj.offsetParent) valor += posicionY(obj.offsetParent);
                                return valor;
                            }

                            function posicionX(obj) {
                                var valor = obj.offsetLeft;
                                if (obj.offsetParent) valor += posicionX(obj.offsetParent);
                                return valor;
                            }

                            /* Limpiar pizarra */
                            function LimpiarTrazado(){
                                contexto=document.getElementById(idCanvas).getContext('2d');
                                contexto.fillStyle=colorDeFondo;
                                contexto.fillRect(0,0,anchoCanvas,altoCanvas);
                            }

                            /* Enviar el trazado */
                            function GuardarTrazado(){
                                imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
                                document.forms[idForm].submit();



                            }
                            </script>

                            <!--CONDICIONES-->
                            <div class="--form_bloque --aviso_input">
                                <p><input type="checkbox" name="aviso_input" id="aviso_input"> Acepto Términos y
                                    condiciones,
                                    Protección de Datos y la Política de privacidad.</p>
                            </div>
                            <button type="submit" class="--cta_submit" name="btnMatricula" id="btnMatricula">Finalizar Automatrícula</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_becas">
            <div class="--copy">
                <p class="--section_title">BECAS</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <div class="--2_columns">
                    <div class="--becas_bloque_title">
                        <p class="--title">Programa de<br> BECAS Ayuda<br> T Pymes</p>
                    </div>
                    <div class="--becas_bloque_copy_1">
                        <p class="--text">La Escuela de Asesores es el centro de formación especializado de <b>Ayuda
                                T Pymes,</b> la mayor asesoría de empresas en España. Su Programa de Becas es una apuesta
                            estratégica por el talento, la diversidad y la igualdad de oportunidades en el sector de la
                            asesoría y el despacho profesional.</p>
                        <p class="--text"><b>La herramienta para proyectar la carrera profesional de estudiantes con
                                talento, pero sin los recursos económicos suficientes para acceder a la Escuela de
                                Asesores.</b></p>
                    </div>
                    <div class="--becas_bloque_img">
                        <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_cifras">
            <div class="--copy">
                <p class="--section_title">CIFRAS</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--title">El Programa de BECAS de<br> Ayuda T Pymes <b>en cifras</b></p>
                <div class="--cifras_tabla">
                    <div class="--cifras_tabla_item">
                        <div class="--cifras_tabla_item_datos">
                            <p><span>+</span>100</p>
                        </div>
                        <div class="--cifras_tabla_item_copy">
                            <p>+ de 100 BECAS <br>otorgadas en 2021</p>
                        </div>
                    </div>
                    <div class="--cifras_tabla_item">
                        <div class="--cifras_tabla_item_datos">
                            <p>70/100<span>%</span></p>
                        </div>
                        <div class="--cifras_tabla_item_copy">
                            <p>Becas del 70 al 100% en los distintos planes formativos de EDASE</p>
                        </div>
                    </div>
                    <div class="--cifras_tabla_item">
                        <div class="--cifras_tabla_item_datos">
                            <p>1,2 <span>M</span></p>
                        </div>
                        <div class="--cifras_tabla_item_copy">
                            <p>1’2 millones de euros otorgados desde 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            var fin = document.getElementById('financiacion');
            var integro = document.getElementById('pagoIntegro');
            var fecha = document.getElementById('divFecha')
            var cuota = document.getElementById('divCuota')
            fin.addEventListener('change', validarCheck, false);
            integro.addEventListener('change', validarCheck2, false);

            fecha.style.visibility = 'hidden';
            cuota.style.visibility = 'hidden';

            function validarCheck2(){
                if(integro.checked){
                    fin.checked= false
                    fecha.style.visibility = 'hidden';
                    cuota.style.visibility = 'hidden';
                }
            }

            function validarCheck(){
                var checked = fin.checked;
                if(checked){
                    fecha.style.visibility = 'visible';
                    cuota.style.visibility = 'visible';
                    integro.checked = false;
                }
            }
        </script>
    </div>
@endsection
