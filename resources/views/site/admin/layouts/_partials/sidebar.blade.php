<!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('site.admin.index')}}">
                <div class="sidebar-brand-icon">
                    <img class="img-profile"
                                    src="{{asset('admin/img/logo.png')}}">
                </div>
                <div class="sidebar-brand-text text-dark mx-3">Animes<sup>Adm</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider bg-dark my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="{{route('site.admin.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt text-info"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider bg-dark">

            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table text-info"></i>
                    <span>Gerenciamento</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Animes</h6>
                        <a class="collapse-item text-dark" href="{{route('site.admin.animes')}}">Animes</a>
                        <a class="collapse-item text-dark" href="{{route('site.admin.generos')}}">Generos</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench text-info"></i>
                    <span>Contas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header text-dark">Usuarios</h6>
                        <a class="collapse-item text-dark" href="{{route('site.admin.usuarios')}}">Usuarios</a>
                        <a class="collapse-item text-dark" href="{{route('site.admin.comentarios')}}">Comentarios</a>
                        <a class="collapse-item text-dark" href="{{route('site.admin.admin')}}">Administradores</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block bg-dark">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="{{route('site.index')}}">
                    <i class="fas fa-fw fa-arrow-left text-info"></i>
                    <span>Voltar para o anime</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-info" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->