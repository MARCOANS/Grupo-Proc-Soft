<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav theme-brand flex-row ">
            <li class="nav-item theme-text">
                <a class="nav-link" href="#">
                    El roble
                </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <a class="sidebarCollapse" data-placement="bottom" href="javascript:void(0);">
                    <svg class="feather feather-list" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="8" x2="21" y1="6" y2="6">
                        </line>
                        <line x1="8" x2="21" y1="12" y2="12">
                        </line>
                        <line x1="8" x2="21" y1="18" y2="18">
                        </line>
                        <line x1="3" x2="3" y1="6" y2="6">
                        </line>
                        <line x1="3" x2="3" y1="12" y2="12">
                        </line>
                        <line x1="3" x2="3" y1="18" y2="18">
                        </line>
                    </svg>
                </a>
            </li>
        </ul>
        <ul class="navbar-item flex-row search-ul ">
            <li class="nav-item align-self-center search-animated">
                <svg class="feather feather-search toggle-search" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11" cy="11" r="8">
                    </circle>
                    <line x1="21" x2="16.65" y1="21" y2="16.65">
                    </line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input class="form-control search-form-control ml-lg-auto" type="text">
                        </input>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="navbar-item flex-row navbar-dropdown">
            <li class="nav-item dropdown apps-dropdown more-dropdown ">
                <a class="btn btn-dark mb-2" href="{{ route('Site.Index') }}" id="appSection">
                    Ir al sitio
                </a>
            </li>
        </ul>
        <ul class="navbar-item flex-row navbar-dropdown">
            <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle user" data-toggle="dropdown" href="javascript:void(0);" id="userProfileDropdown">
                    <svg class="feather feather-settings" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="3">
                        </circle>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg>
                </a>
                <div aria-labelledby="userProfileDropdown" class="dropdown-menu position-absolute animated fadeInUp">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img alt="avatar" class="img-fluid mr-2" src="{{ asset('assets/dashboard/images/profile-17.jpeg') }}">
                                <div class="media-body">
                                    <h5>
                                        {{ auth()->user()->usu_nombres }}
                                    </h5>
                                    <p>
                                        {{ auth()->user()->usu_nombres }}
                                    </p>
                                </div>
                            </img>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="#">
                            <svg class="feather feather-user" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                </path>
                                <circle cx="12" cy="7" r="4">
                                </circle>
                            </svg>
                            <span>
                                Mi perfil
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <svg class="feather feather-log-out" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                </path>
                                <polyline points="16 17 21 12 16 7">
                                </polyline>
                                <line x1="21" x2="9" y1="12" y2="12">
                                </line>
                            </svg>
                            <span>
                                Salir
                            </span>
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>