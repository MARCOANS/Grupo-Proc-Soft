<style type="text/css">
    .navbar {
    padding: 0;
    min-height: 80px;
    background: #c00a27;
    -webkit-transition: .3s ease all;
    transition: .3s ease all;
    -webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
    -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
}
</style>
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image">
            </figure>
            <div class="user-info">
                <img alt="avatar" src="{{ asset('assets/dashboard/images/profile-17.jpeg') }}">
                    <h6 class="">
                        {{ auth()->user()->usu_nombres }}
                    </h6>
                    <p class="">
                        {{ auth()->user()->usu_appaterno }}
                    </p>
                </img>
            </div>
        </div>
        <div class="shadow-bottom">
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ $activeUsuario ?? '' }}">
                <a aria-expanded="{{ $expandedUsuario ?? 'false' }}" class="dropdown-toggle" data-toggle="collapse" href="#forms">
                    <div class="">
                        <svg class="feather feather-clipboard" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect height="4" rx="1" ry="1" width="8" x="8" y="2">
                            </rect>
                        </svg>
                        <span>
                            Usuarios
                        </span>
                    </div>
                    <div>
                        <svg class="feather feather-chevron-right" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="9 18 15 12 9 6">
                            </polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu list-unstyled " data-parent="#accordionExample" id="forms">
                    <li class="active">
                        <a href="{{ route('Admin.Usuario.Index') }}">
                            Todos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Admin.Usuario.Create') }}">
                            Nuevo
                        </a>
                    </li>
                </ul>
            </li>
          
            <li class="menu {{ $activeProducto ?? ''  }}">
                <a aria-expanded="{{ $expandedProducto ?? 'false'}}" class="dropdown-toggle" data-toggle="collapse" href="#productos">
                    <div class="">
                        <svg class="feather feather-clipboard" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect height="4" rx="1" ry="1" width="8" x="8" y="2">
                            </rect>
                        </svg>
                        <span>
                            Productos
                        </span>
                    </div>
                    <div>
                        <svg class="feather feather-chevron-right" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="9 18 15 12 9 6">
                            </polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu list-unstyled {{ $showProductoNuevo ?? '' }}" data-parent="#accordionExample" id="productos">
                    <li class="{{ $activeProductoTodos ?? '' }}">
                        <a href="{{ route('Admin.Producto.Index') }}">
                            Todos
                        </a>
                    </li>
                    <li class="{{ $activeProductoNuevo ?? '' }}">
                        <a href="{{ route('Admin.Producto.Create') }}">
                            Nuevo
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>