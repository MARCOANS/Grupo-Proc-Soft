@extends('layouts.site')

@section('header')
@component('components.header-site')
@endcomponent
@endsection

@section('content')
<div class="col-full">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="home-v1-slider">
                <div class="owl-carousel owl-inner-nav owl-ui-sm" id="owl-main">
                    <div class="item slider-2" style="background-image: url({{asset('assets/images/homepage-slider-1.jpg')}});">
                        <div class="caption fadeIn">
                            <div class="price-tag">
                                <div class="border front">
                                </div>
                                <div class="price-tag-value">
                                    <div class="price">
                                        <span class="symbol">
                                            S/.
                                        </span>
                                        39
                                        <span class="slider-amount">
                                            99
                                            <br>
                                            </br>
                                        </span>
                                    </div>
                                </div>
                                <div class="border back">
                                </div>
                            </div>
                            <div class="title">
                                Pollo entero
                            </div>
                            <div class="sub-title">
                                + Papas
                                + Gaseosa
                            </div>
                        </div>
                        <!-- /.caption -->
                    </div>
                    <!-- /.item -->
                    <div class="item slider-2" style="background-image: url({{asset('assets/images/homepage-slider-2.jpg')}});">
                        <div class="caption fadeIn">
                            <div class="price-tag">
                                <div class="border front">
                                </div>
                                <div class="price-tag-value">
                                    <div class="price">
                                        <span class="symbol">
                                            S/.
                                        </span>
                                        12
                                        <span class="slider-amount">
                                            99
                                            <br>
                                            </br>
                                        </span>
                                    </div>
                                </div>
                                <div class="border back">
                                </div>
                            </div>
                            <div class="title">
                                Pollo y carnes a la parrilla
                            </div>
                        </div>
                        <!-- /.caption -->
                    </div>
                    <!-- /.item -->
                    <div class="item slider-2" style="background-image: url({{asset('assets/images/homepage-slider-3.jpg')}});">
                        <div class="caption fadeIn">
                            <div class="price-tag">
                                <div class="border front">
                                </div>
                                <div class="price-tag-value">
                                    <div class="price">
                                        <span class="symbol">
                                            S/.
                                        </span>
                                        12
                                        <span class="slider-amount">
                                            99
                                            <br>
                                            </br>
                                        </span>
                                    </div>
                                </div>
                                <div class="border back">
                                </div>
                            </div>
                            <div class="title">
                                Mostrito
                            </div>
                        </div>
                        <!-- /.caption -->
                    </div>
                    <!-- /.item -->
                    <div class="item slider-2" style="background-image: url({{asset('assets/images/homepage-slider-4.jpg')}});">
                        <!-- /.caption -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
            </div>
            <div class="features-list">
                <div class="row">
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-best-quality">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                               Buena calidad
                            </h4>
                          
                        </div>
                    </div>
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-on-time">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                                Entrega a tiempo
                            </h4>
                           
                        </div>
                    </div>
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-master-chef">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                                MasterChefs
                            </h4>
                           
                        </div>
                    </div>
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-ready-delivery">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                                Al punto
                            </h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
@endsection

@section('footer')
@component('components.footer-site')
@endcomponent
@endsection
