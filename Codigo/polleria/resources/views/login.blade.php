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
                                    <form action="{{ route('Authenticate') }}" class="login-form" method="Post">
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
                                            @if( Session::get('errors') )


                                            @foreach( Session::get('errors') as $message )
                                            @if(is_array($message))
                                            @foreach( $message as $subMessage )
                                            <div class="alert alert-danger">
                                                <li>
                                                    {{ $subMessage }}
                                                </li>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @endif
                                            @endforeach


                                            @endif
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
                                                {{ $danger ?? '' }}
                                            
                                          
                                           @if(session()->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('error') }}
                                                </div>
                                                @endif
                                            </div>
                                        </input>
                                    </form>
                                </div>
                                <div class="u-column2 col-2">
                                    <h2>
                                        Registrarse
                                    </h2>
                                    <form class="register" id="form-registro">
                                        <input id="token" name="_token" type="hidden" value="{{csrf_token() }}"/>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label text-right" for="colFormLabelSm">
                                                Nombre
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control form-control-sm" name="nombre" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Apellido Paterno
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control form-control-sm" name="paterno" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Apellido Materno
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control form-control-sm" name="materno" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Correo
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control form-control-sm" name="email" required="" type="email">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Telefono
                                            </label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-sm" name="telefono" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Nombre de usuario
                                            </label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-sm" name="usuario" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-sm-4 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                                                Contraseña
                                            </label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-sm" name="password" required="" type="text">
                                                </input>
                                            </div>
                                        </div>
                                       
                                        <p class="form-row">
                                            <input id="woocommerce-login-nonce" name="woocommerce-login-nonce" type="hidden" value="02aaeb6b10"/>
                                            <input name="_wp_http_referer" type="hidden" value="/pizzaro/my-account/"/>
                                            <input class="woocommerce-Button button" name="login" type="submit" value="Login"/>
                                            <label class="inline" for="rememberme">
                                                <input class="woocommerce-Input woocommerce-Input--checkbox" id="rememberme" name="rememberme" type="checkbox" value="forever"/>
                                                Recordarme
                                            </label>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js">
</script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles" rel="stylesheet">
<script type="text/javascript">
        jQuery(function($) {


        $("#form-registro").submit(function(e) {


    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    
    
    $.ajax({
           type: "POST",
           url: '{{ route('Usuario.Store') }}',
           data: form.serialize(), // serializes the form's elements.
           dataType: 'json',
           success: function(data)
           {
               Swal.fire(data.message);
                 $('#form-registro')[0].reset();
           },
           error : function(message) {
                               console.log();
                                Swal.fire({
                                icon: 'warning',
                                title: message.responseJSON.message,
                                showConfirmButton: false,
                                timer: 2500
                                })
        
                            }

         });

    
});
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
</link>