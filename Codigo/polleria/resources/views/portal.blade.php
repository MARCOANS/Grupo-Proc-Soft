@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection



@section('style')
<link href="{{ asset('assets/dashboard/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/datatables.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/dt-global_style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/apexcharts.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/dash_2.css') }}" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" rel="stylesheet"/>
@endsection

@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
     
        @if (auth()->user()->admin)
        @if(auth()->user()->admin->estado=='Activo')
        <div class="col-6 layout-spacing">
            <div class="widget widget-account-invoice-two">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <h5 class="">
                                Administrador
                            </h5>
                        </div>
                        <div class="acc-action">
                            <div class="">
                            </div>
                            <a href="{{ route('Admin.Producto.Index') }}">
                                Ingresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif

        @if (auth()->user()->cliente)
         @if(auth()->user()->cliente->cli_estado=='Activo')
        <div class="col-6 layout-spacing">
            <div class="widget widget-account-invoice-two">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <h5 class="">
                                Cliente
                            </h5>
                        </div>
                        <div class="acc-action">
                            <div class="">
                            </div>
                            <a href=" {{ route('Cliente.Pedido.Index') }} ">
                                Ingresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif
    </div>
</div>
@endsection

@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')
<script src="{{asset('assets/dashboard/js/datatables.js') }}">
</script>
@endsection
