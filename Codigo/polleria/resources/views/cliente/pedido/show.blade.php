@extends('layouts.dashboard')

@section('header')
@component('components.dashboard-cliente.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard-cliente.menu',['activePedido'=>'active','expandedPedido'=>'true','showPedido'=>'show','activePedidoShow'=>'active'])
@endcomponent
@endsection

@section('style')
<link href="{{ asset('assets/dashboard/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/datatables.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/dt-global_style.css') }}" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" rel="stylesheet"/>
@endsection

@section('content')
<style>
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 100%;
            display: inline-block;
        }
    }
</style>
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
        @case('En Camino')
        <div class="alert alert-info mb-4" role="alert">
            <strong>
                Pedido En Camino
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
                    @php
                        $total=0;
                        $descripcion='';
                    @endphp
                    @foreach ($pedido->detalle as $item)
                    @php
                  $descripcion= $item->det_cantidad .' -' .$item->datosProducto->prod_nombre;
                    $precio=$item->det_subtotal ;
$total+=$precio;
                       
                    @endphp
                    <div class="card component-card_2 col-3">
                        <img alt="widget-card-2" class="card-img-top" height="250" src="{{ url(Storage::url('sistem/photos/' . $item->datosProducto->prod_imagen)) }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span class="text-success h2">
                                        {{ $item->det_cantidad }}
                                    </span>
                                    {{ $item->datosProducto->prod_nombre }}
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
   
    
     @switch($pedido->estado_pago)
        

        @case('Pagado')
        <div class=" btn btn-block btn-success alert alert-warning mb-4" role="alert">
            <strong>
               Pagado
            </strong>
        </div>
        @break
        

         @default
         <div class="btn btn-block" id="paypal-button-container">
    </div>
        @endswitch
    
    <input id="token" name="_token" type="hidden" value="{{csrf_token() }}"/>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
<script src="https://www.paypalobjects.com/api/checkout.js">
</script>
<script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
            sandbox:    'AaWKblhcwwBuOvIeheXUQ86WRflhTE9zCoSD73n_L3dn3tRs4gsevoPXgN4fO9H3S3IDZRW_6dX9kjL9',
            production: ''
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '{{ $total }}', currency: 'USD' }, 
                            description:"Compra de productos",
                            custom:"{{ $pedido->id_pedido }}"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
token = $("#token").val();

    $.ajax({
           type: "POST",
           url: '{{ route('Cliente.Pedido.UpdatePago',['pedido'=>$pedido->id_pedido]) }}',
           data: {'token':data.paymentToken,'pay':data.paymentID, _token:token}, // serializes the form's elements.
            dataType:'json',
     
   


           success: function(data)
           {
                Swal.fire('Exito', 'Pago aceptado', 'success')
           }
         });

                console.log(data);
                //window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
    
    }, '#paypal-button-container');
</script>
@endsection

@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')


@endsection
