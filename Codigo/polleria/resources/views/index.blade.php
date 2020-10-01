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
            <div class="tiles">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="banner top-left">
                            <a href="#">
                                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( {{asset('assets/images/1.jpg')}} ); height: 442px;">
                                    <div class="caption">
                                        <h3 class="title">
                                            GRILLED CHICKEN
                                        </h3>
                                        <h4 class="subtitle">
                                            SUMMER PIZZA
                                        </h4>
                                        <span class="button">
                                            HOT & SPICY
                                        </span>
                                        <span class="condition">
                                            <em>
                                                *
                                            </em>
                                            ONLY IN LOCAL
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="banners">
                            <div class="row">
                                <div class="banner col-sm-6 top-right">
                                    <a href="#">
                                        <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( {{asset('assets/images/2.jpg')}} ); height: 210px;">
                                            <div class="caption">
                                                <h3 class="title">
                                                    FREE
                                                </h3>
                                                <h4 class="subtitle">
                                                    FRIES
                                                </h4>
                                                <div class="description">
                                                    for online orders in wendsdays
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="banner col-sm-6 top-right">
                                    <a href="#">
                                        <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( {{asset('assets/images/3.jpg')}} ); height: 210px;">
                                            <div class="caption">
                                                <h3 class="title">
                                                    iCED COFFEE
                                                </h3>
                                                <h4 class="subtitle">
                                                    SUMMERS
                                                </h4>
                                                <span class="condition">
                                                    <em>
                                                        *
                                                    </em>
                                                    ONLY IN LOCAL
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner center">
                            <a href="#">
                                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( {{asset('assets/images/4.jpg')}}  ); height: 210px;">
                                    <div class="caption">
                                        <h3 class="title">
                                            <span>
                                                ORDER
                                            </span>
                                            ONLINE
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-tabs">
                <ul class="nav nav-tabs pizzaro-nav-tabs">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#h1-tab-products-1">
                            Wraps
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="active" data-toggle="tab" href="#h1-tab-products-2">
                            Pizza Sets
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#h1-tab-products-3">
                            Burgers
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="h1-tab-products-1">
                        <div class="section-products">
                            <div class="woocommerce columns-3">
                                <div class="columns-3">
                                    <ul class="products">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p1.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Pepperoni Pizza
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p2.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Trio Cheese
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p3.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Apricot Chicken
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="h1-tab-products-2">
                        <div class="section-products">
                            <div class="woocommerce columns-3">
                                <div class="columns-3">
                                    <ul class="products">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p4.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Italiano Original
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p5.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Chicken Hawaii
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p6.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Summer Pizza
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="h1-tab-products-3">
                        <div class="section-products">
                            <div class="woocommerce columns-3">
                                <div class="columns-3">
                                    <ul class="products">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p7.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Pepperoni Calzone
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p8.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Pepperoni Pizza
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <div class="product-image-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p9.jpg')}}">
                                                            </img>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                            <h3>
                                                                Trio Cheese
                                                            </h3>
                                                            <div itemprop="description">
                                                                <p style="max-height: none;">
                                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                                </p>
                                                            </div>
                                                            <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                                    <h3>
                                                                        <span>
                                                                            Pick Size
                                                                        </span>
                                                                    </h3>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                22 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                19
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                                        <span class="ywapo_label_tag_position_after">
                                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                                29 cm
                                                                            </span>
                                                                        </span>
                                                                        <span class="ywapo_label_price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    $
                                                                                </span>
                                                                                25
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                                Add to cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        </li>
                                        <!-- /.products -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <div class="stretch-full-width section-products-sale-event" style="background-size: cover; background-position: center center; background-image: url( {{asset('assets/images/5.jpg')}} ); height: 468px;">
                <div class="sale-event-content">
                    <h3 class="pre-title">
                        <span>
                            FREE DELIVERY WITH
                        </span>
                    </h3>
                    <h2 class="section-title">
                        PIZZA OF THE DAY
                    </h2>
                    <div class="sale-event-products">
                        <div class="products-price">
                            <span class="price">
                                <span class="currency">
                                    $
                                </span>
                                9
                                <span class="decimals">
                                    99
                                </span>
                                <span class="price-info">
                                    EACH
                                </span>
                            </span>
                        </div>
                        <ul class="products-info">
                            <li>
                                <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                    <h3>
                                        Vegge Lover
                                    </h3>
                                </a>
                            </li>
                            <li>
                                <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                    <h3>
                                        Summer Pizza
                                    </h3>
                                </a>
                            </li>
                            <li>
                                <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                    <h3>
                                        Chicken Hawaii
                                    </h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="button" href="single-product-v1.html">
                        Order Now
                    </a>
                </div>
            </div>
            <div class="section-products">
                <h2 class="section-title">
                    Goes Great With
                </h2>
                <div class="columns-4">
                    <ul class="products">
                        <li class="product first">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p9.jpg')}}">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <h3>
                                                Trio Cheese
                                            </h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">
                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                </p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                    <h3>
                                                        <span>
                                                            Pick Size
                                                        </span>
                                                    </h3>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                22 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                19
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                29 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                25
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                Add to cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                        <!-- /.products -->
                        <li class="product ">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p10.jpg')}}">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <h3>
                                                Trio Cheese
                                            </h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">
                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                </p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                    <h3>
                                                        <span>
                                                            Pick Size
                                                        </span>
                                                    </h3>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                22 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                19
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                29 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                25
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                Add to cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                        <!-- /.products -->
                        <li class="product ">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p2.jpg')}}">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <h3>
                                                Trio Cheese
                                            </h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">
                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                </p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                    <h3>
                                                        <span>
                                                            Pick Size
                                                        </span>
                                                    </h3>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                22 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                19
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                29 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                25
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                Add to cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                        <!-- /.products -->
                        <li class="product last">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <img alt="" class="img-responsive" src="{{asset('assets/images/p1.jpg')}}">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                            <h3>
                                                Trio Cheese
                                            </h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">
                                                    Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.
                                                </p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                    <h3>
                                                        <span>
                                                            Pick Size
                                                        </span>
                                                    </h3>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                22 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                19
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                                        <span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                                29 cm
                                                            </span>
                                                        </span>
                                                        <span class="ywapo_label_price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    $
                                                                </span>
                                                                25
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                Add to cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                        <!-- /.products -->
                    </ul>
                </div>
            </div>
            <div class="section-product" style="background-size: cover; background-image: url({{asset('assets/images/6.png')}} ); height: 556px;">
                <div class="product-wrapper">
                    <div class="product-inner">
                        <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                            <h3>
                                Pepperoni Pizza
                            </h3>
                            <div itemprop="description">
                                <p>
                                    Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green olives, black olives, fresh tomatoes.kk
                                </p>
                            </div>
                            <div class="yith_wapo_groups_container">
                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                    <h3>
                                        <span>
                                            Pick Size
                                        </span>
                                    </h3>
                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                        <span class="ywapo_label_tag_position_after">
                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                22  cm
                                            </span>
                                        </span>
                                        <span class="ywapo_label_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    $
                                                </span>
                                                19.90
                                            </span>
                                        </span>
                                    </div>
                                    <div class="ywapo_input_container ywapo_input_container_radio">
                                        <span class="ywapo_label_tag_position_after">
                                            <span class="ywapo_option_label ywapo_label_position_after">
                                                29  cm
                                            </span>
                                        </span>
                                        <span class="ywapo_label_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    $
                                                </span>
                                                25.90
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="82" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                            Add to cart
                        </a>
                    </div>
                </div>
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
                                Best Quality
                            </h4>
                            <p>
                                Praesent pulvinar neque pellentesque mattis pretium.
                            </p>
                        </div>
                    </div>
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-on-time">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                                On Time
                            </h4>
                            <p>
                                Praesent pulvinar neque pellentesque mattis pretium.
                            </p>
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
                            <p>
                                Praesent pulvinar neque pellentesque mattis pretium.
                            </p>
                        </div>
                    </div>
                    <div class="feature col-xs-12 col-sm-3">
                        <div class="feature-icon">
                            <i class="po po-ready-delivery">
                            </i>
                        </div>
                        <div class="feature-label">
                            <h4>
                                Taste Food
                            </h4>
                            <p>
                                Praesent pulvinar neque pellentesque mattis pretium.
                            </p>
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
