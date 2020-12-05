@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu',['activePedido'=>'active','expandedPedido'=>'true','showPedido'=>'show','activePedidoShow'=>'active'])
@endcomponent
@endsection

@section('style')
<link href="{{ asset('assets/dashboard/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/datatables.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/dt-global_style.css') }}" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" rel="stylesheet"/>
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-lg-12 layout-spacing" id="basic">
        @switch($pedido->estado)
        @case('Generado')
        <div class="alert alert-danger mb-4" role="alert">
            <strong>
                Pedido Generado
            </strong>
        </div>
        @break

        @case('Aceptado')
       <div class="alert alert-warning mb-4" role="alert">
            <strong>
                Pedido Aceptado
            </strong>
        </div>
        @break
        @case('Preparando')
         <div class="alert alert-info mb-4" role="alert">
            <strong>
               Estamos preparando tu pedido
            </strong>
        </div>
        @break

       @case('Transportando')
         <div class="alert alert-info mb-4" role="alert">
            <strong>
               Tu  pedido esta en Camino
            </strong>
        </div>
        @break

        @case('Entregado')
       <div class="alert alert-success mb-4" role="alert">
            <strong>
                Pedido Entregado
            </strong>
        </div>
        @break
        @endswitch
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>
                           Direccion de entrega {{ $pedido->lugarentrega }}
                        </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    @foreach ($pedido->detalle as $item)
                    <div class="card component-card_2 col-3">
                        <img alt="widget-card-2" class="card-img-top" src="{{ url(Storage::url('sistem/photos/' . $item->datosProducto->prod_imagen)) }}" height="250" >
                            <div class="card-body">
                                <h5 class="card-title">
                                  <span class="text-success h2">{{ $item->det_cantidad }}</span>  {{ $item->datosProducto->prod_nombre }}
                                </h5>
                                <p class="card-text">
                                    {{ $item->datosProducto->prod_descripcion }}
                                </p>
                            </div>
                        </img>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

 @switch($pedido->estado_pago)
        

        @case('Pagado')
        <div class=" btn btn-block btn-success alert alert-warning mb-4" role="alert">
            <strong>
               Pagado
            </strong>
        </div>
        @break
        

         @default
         <div class=" btn btn-block btn-danger alert alert-warning mb-4" role="alert">
            <strong>
            Pago Pendiente
            </strong>
        </div>
        @endswitch
@endsection

@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')


@endsection
