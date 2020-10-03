@extends('layouts.site',['class'=>'woocommerce-account'])

@section('header')
@component('components.header-site')
@endcomponent
@endsection

@section('content')
<div class="col-full">
    <div class="pizzaro-breadcrumb">
        <nav class="woocommerce-breadcrumb">
            <a href="index.html">
                Inicio
            </a>
            <span class="delimiter">
                <i class="po po-arrow-right-slider">
                </i>
            </span>
            Mi cuenta
        </nav>
    </div>
    <!-- .woocommerce-breadcrumb -->
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="post-10 page type-page status-publish hentry" id="post-10">
                <div class="entry-content">
                    <div class="woocommerce">
                        <div class="customer-login-form">
                            <span class="or-text">
                                or
                            </span>
                            <div class="u-columns col2-set" id="customer_login">
                                <div class="u-column1 col-1">
                                    <h2>
                                        Login
                                    </h2>
                                    <form class="login-form" action="{{ route('Authenticate') }}" method="Post">
                                        <input id="token" name="_token" type="hidden" value="{{ csrf_token() }}">
                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                            <label for="username">
                                                Usuario
                                                <span class="required">
                                                    *
                                                </span>
                                            </label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text" id="username" name="username" required="" type="text" value="{{ old('username') }}"/>
                                        </p>
                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                            <label for="password">
                                                Contraseña
                                                <span class="required">
                                                    *
                                                </span>
                                            </label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text" id="password" name="password" required="" type="password"/>
                                        </p>
                                        <p class="form-row">
                                            <input id="woocommerce-login-nonce" name="woocommerce-login-nonce" type="hidden" value="02aaeb6b10"/>
                                            <input name="_wp_http_referer" type="hidden" value="/pizzaro/my-account/"/>
                                            <input class="woocommerce-Button button" name="login" type="submit" value="Login"/>
                                            <label class="inline" for="rememberme">
                                                <input class="woocommerce-Input woocommerce-Input--checkbox" id="rememberme" name="rememberme" type="checkbox" value="forever"/>
                                                Recordarme
                                            </label>
                                        </p>
                                        <p class="woocommerce-LostPassword lost_password">
                                            <a href="#">
                                                Olvidaste tu contraseña?
                                            </a>
                                        </p>

                                        <div>
                                          
                                           @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                                          
                                        </div>
                                    </form>
                                </div>
                                <div class="u-column2 col-2">
                                    <h2>
                                        Registrarse
                                    </h2>
                                    <form class="register">
                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                            <label for="reg_email">
                                                Email
                                                <span class="required">
                                                    *
                                                </span>
                                            </label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_email" name="email" type="email" value=""/>
                                        </p>
                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                            <label for="reg_password">
                                                Contraseña
                                                <span class="required">
                                                    *
                                                </span>
                                            </label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_password" name="password" type="password"/>
                                        </p>
                                        <!-- Spam Trap -->
                                        <div style="left: -999em; position: absolute;">
                                            <label for="trap">
                                                Anti-spam
                                            </label>
                                            <input id="trap" name="email_2" tabindex="-1" type="text"/>
                                        </div>
                                        <p class="woocomerce-FormRow form-row">
                                            <input id="woocommerce-register-nonce" name="woocommerce-register-nonce" type="hidden" value="1fe13dcb6d"/>
                                            <input name="_wp_http_referer" type="hidden" value="/pizzaro/my-account/"/>
                                            <input class="woocommerce-Button button" name="register" type="submit" value="Registrarse"/>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.customer-login-form -->
                    </div>
                </div>
                <!-- .entry-content -->
            </div>
            <!-- #post-## -->
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

@section('script')
<script type="text/javascript">
    jQuery(function($) {

/*        $("#login-form").submit(function(e) {
 

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    
    
    $.ajax({
           type: "POST",
           url: '{{ route('login') }}',
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    
});*/
    })
</script>
@endsection
