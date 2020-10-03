<header class="site-header header-v1" id="masthead" style="background-image: none; ">
    <div class="col-full">
        <a class="skip-link screen-reader-text" href="#site-navigation">
            Skip to navigation
        </a>
        <a class="skip-link screen-reader-text" href="#content">
            Skip to content
        </a>
        <div class="header-wrap">
            <div class="site-branding">
                <a class="custom-logo-link" href="index.html" rel="home">
                    <img src="{{asset('assets/images/logo.png')}}">
                    </img>
                </a>
            </div>
            <nav aria-label="Primary Navigation" class="main-navigation" id="site-navigation">
                <button aria-controls="site-navigation" aria-expanded="false" class="menu-toggle">
                    <span class="close-icon">
                        <i class="po po-close-delete">
                        </i>
                    </span>
                    <span class="menu-icon">
                        <i class="po po-menu-icon">
                        </i>
                    </span>
                    <span class=" screen-reader-text">
                        Menu
                    </span>
                </button>
                <div class="primary-navigation">
                    <ul aria-expanded="false" class="menu nav-menu" id="menu-main-menu">
                        <li class="menu-item">
                            <a href="#">
                                Empieza tu pedido
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                Nosotros
                            </a>
                        </li>
                      
                        
                       <li class="menu-item">
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="handheld-navigation">
                    <span class="phm-close">
                        Close
                    </span>
                    <ul class="menu">
                        <li class="menu-item ">
                            <a href="#">
                                <i class="fas fa-drumstick-bite">
                                </i>
                                Pollos
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="#">
                                <i class="fas fa-dumpster-fire">
                                </i>
                                Parrillas
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="shop-grid-3-column.html">
                                <i class="po po-salads">
                                </i>
                                Guarniciones
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="#">
                                <i class="far fa-coffee">
                                </i>
                                Bebidas
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="#">
                                <i class="fas fa-percentage">
                                </i>
                                Promociones
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">
                    <span class="intro-text">
                       Llamar y ordenar
                    </span>
              
                    <span class="phone-number" id="city-phone-number-label">
                       997 656 343
                    </span>
                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a href="#" title="View your shopping cart">
                            <i class="po po-scooter">
                            </i>
                            <span>
                              Ir al carrito
                            </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" title="View your shopping cart">
                                    <span class="count">
                                        2 items
                                    </span>
                                    <span class="amount">
                                        $50.00
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pizzaro-secondary-navigation">
            <nav aria-label="Secondary Navigation" class="secondary-navigation">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#">
                            <i class="fas fa-drumstick-bite">
                            </i>
                            Pollos
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <i class="fas fa-dumpster-fire">
                            </i>
                            Parrillas
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <i class="far fa-salad">
                            </i>
                            Guarniciones
                        </a>
                    </li>
                    <li class="#">
                        <a href="shop-grid-3-column.html">
                            <i class="fas fa-glass-whiskey">
                            </i>
                            Bebidas
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <i class="fas fa-percentage">
                            </i>
                            Promociones
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- #secondary-navigation -->
        </div>
    </div>
</header>