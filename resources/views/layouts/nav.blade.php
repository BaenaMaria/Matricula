
    <nav id="nav">
        <div class="--nav_primary">
            <div class="--logo">
                <a href="{{route('home')}}">
                    <img src="{{ URL::to('/') }}/images/svg/edase.svg" alt="">
                </a>
            </div>
            <div class="--menu">
                <ul class="--menu_list">
                    <li class="--menu_list_item --menu_list_item_desp" data="1" data-order="1">titulaciones</li>
                    <li class="--menu_list_item --menu_list_item_desp" data="2" data-order="2">la escuela</li>
                    {{-- <li class="--menu_list_item --menu_list_item_desp" data="3" data-order="3">plan de carrera</li> --}}
                    <li class="--menu_list_item" data-order="4"><a href="{{route('becas')}}">becas y admisión</a></li>
                </ul>
                <p class="--phone_tablet"><a href="tel:900 866 336">900 866 336</a></p>
                <p class="--acceder_mobile"><a href="">Acceder</a></p>
            </div>
            <div class="--submenu">
                <ul class="--submenu_list">
                    <li class="--submenu_list_item"><a href=""><b>acceder</b></a></li>
                    <li class="--submenu_list_item --menu_list_item_desp" data="rrss">redes sociales</li>
                    <li class="--submenu_list_item"><a href="tel:900 866 336"><b>900 866 336</b></a></li>
                </ul>
            </div>
            <div class="--icon_menu">
                <div class="--icon_menu_line"></div>
                <div class="--icon_menu_line"></div>
                <div class="--icon_menu_line"></div>
            </div>
        </div>
        <div class="--desplegable">
            <div class="--mascara"></div>
            <ul class="--deplegable_list --visible" data="1">
                <a href="{{route('master')}}">
                    <li class="--desplegable_list_item">
                        Master Asesor Experto
                    </li>
                </a>
                <a href="{{route('mba')}}">
                    <li class="--desplegable_list_item">
                        MBA
                    </li>
                </a>
                <a href="{{route('tecnico')}}">
                    <li class="--desplegable_list_item">
                        Técnico Asesoría
                    </li>
                </a>
            </ul>
            <ul class="--deplegable_list" data="2">
                <a href="{{route('conocenos')}}">
                    <li class="--desplegable_list_item">
                        Conócenos
                    </li>
                </a>
                <a href="{{route('metodologia')}}">
                    <li class="--desplegable_list_item">
                        Metodología
                    </li>
                </a>
            </ul>
            <ul class="--deplegable_list" data="3">
                <li class="--desplegable_list_item">Lorem ipsum 3</li>
                <li class="--desplegable_list_item">Lorem ipsum</li>
                <li class="--desplegable_list_item">Lorem ipsum</li>
            </ul>
            <ul class="--deplegable_list" data="rrss">
                <a href="https://www.instagram.com/escueladeasesores_/" target="_blank">
                    <li class="--desplegable_list_item">Instagram</li>
                </a>
                <a href="https://www.linkedin.com/company/edase-escuela-de-asesores-de-ayuda-t-pymes" target="_blank">
                    <li class="--desplegable_list_item">LinkedIn</li>
                </a>
                <a href="https://www.tiktok.com/@edase_escuela" target="_blank">
                    <li class="--desplegable_list_item">Tik tok</li>
                </a>
                <a href="https://www.facebook.com/escueladeasesores/" target="_blank">
                    <li class="--desplegable_list_item">Facebook</li>
                </a>
                <a href="https://wa.link/zgjqi0" target="_blank">
                    <li class="--desplegable_list_item">Whatsapp</li>
                </a>
            </ul>
        </div>
        <div class="--content_menu">
            <ul class="--links --open_menu --left_menu" data-select="1">
                <li>
                    HOME
                </li>
                <li class="--content_menu_link" data-link="2">
                    TITULACIONES
                </li>
                <li class="--content_menu_link" data-link="3">
                    LA ESCUELA
                </li>
                {{-- <li class="--content_menu_link" data-link="4">
                    PLANES DE CARRERA
                </li> --}}
                <li class="--content_menu_link">
                        <a href="{{route('becas')}}">
                        BECAS Y ADMINISIONES
                    </a>
                </li>
                <li class="--content_menu_link" data-link="6">
                    RRSS
                </li>
            </ul>
            <ul class="--links" data-select="2">
                <li class="--return">< Volver</li>
                <a href="{{route('master')}}">
                    <li>
                        Master Asesor Experto
                    </li>
                </a>
                <a href="{{route('mba')}}">
                    <li>
                        MBA
                    </li>
                </a>
                <a href="{{route('tecnico')}}">
                    <li>
                        Técnico Asesoría
                    </li>
                </a>
            </ul>
            <ul class="--links" data-select="3">
                <li class="--return">< Volver</li>
                <a href="{{route('conocenos')}}">
                    <li>
                        Conócenos
                    </li>
                </a>
                <a href="{{route('metodologia')}}">
                    <li>
                        Metodología
                    </li>
                </a>
            </ul>
            <ul class="--links" data-select="4">
                <li class="--return">< Volver</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
            </ul>
            <ul class="--links" data-select="5">
                <li class="--return">< Volver</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
            </ul>
            <ul class="--links" data-select="6">
                <li class="--return">< Volver</li>
                <a href="https://www.instagram.com/escueladeasesores_/" target="_blank">
                    <li>Instagram</li>
                </a>
                <a href="https://www.linkedin.com/company/edase-escuela-de-asesores-de-ayuda-t-pymes" target="_blank">
                    <li>LinkedIn</li>
                </a>
                <a href="https://www.tiktok.com/@edase_escuela" target="_blank">
                    <li>Tik tok</li>
                </a>
                <a href="https://www.facebook.com/escueladeasesores/" target="_blank">
                    <li>Facebook</li>
                </a>
                <a href="https://wa.link/zgjqi0" target="_blank">
                    <li>Whatsapp</li>
                </a>
            </ul>
        </div>
    </nav>    

    <div class="--llamar_mobile">
        <p><a href="tel:900 866 336">LLAMAR AHORA</a></p>
    </div>

