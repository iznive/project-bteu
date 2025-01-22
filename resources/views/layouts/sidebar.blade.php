<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="home" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="26">
            </span>
        </a>
        <a href="home" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="26">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a href="home" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span
                            data-key="t-dashboard">@lang('translation.dashboards')</span> </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">@lang('translation.pages')</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bi bi-mortarboard"></i> <span data-key="t-pages">Egresado</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="ud_egresado" class="nav-link" data-key="t-starter">Datos generales</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-team"> Ver empleos</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-timeline"> Postulaciones</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-faqs"> Curriculum vitae </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="bi bi-person-bounding-box"></i> <span data-key="t-multi-level">Empleador</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Actualizar datos</a>
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Publicar empleos</a>
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Solicitudes</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCat" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCat">
                        <i class="bi bi-folder"></i> <span data-key="t-multi-level">Catalogos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCat">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">Perfiles</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">Carreras</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarConfig" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarConfig">
                        <i class="bi bi-gear"></i> <span data-key="t-multi-level">Configuración</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarConfig">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Actualizar usuario</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">Cambiar contraseña </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
