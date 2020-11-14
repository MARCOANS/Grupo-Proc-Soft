@extends('layouts.site',['class'=>'hfeed site'])

@section('header')
@component('components.header-site')
@endcomponent
@endsection

@section('content')
<div class="site-content" id="content" tabindex="-1">
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
        </div>
        <!-- .woocommerce-breadcrumb -->
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <div class="post-8 page type-page status-publish hentry" id="post-8">
                    <div class="entry-content">
                        <div class="woocommerce">
                            @if (count(Cart::getContent()))
                            <table class="shop_table shop_table_responsive cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">
                                        </th>
                                        <th class="product-thumbnail">
                                        </th>
                                        <th class="product-name">
                                            Producto
                                        </th>
                                        <th class="product-price">
                                            Descripcion
                                        </th>
                                        <th class="product-price">
                                            Precio
                                        </th>
                                        <th class="product-quantity">
                                            Cantidad
                                        </th>
                                        <th class="product-subtotal">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::getContent() as $item)
                                    <tr>
                                        <td>
                                            <form action="{{route('Cart.RemoveItem')}}" method="POST">
                                                @csrf
                                                <input name="id" type="hidden" value="{{$item->id}}">
                                                    <button class="btn btn-link btn-sm text-danger" type="submit">
                                                        <span class="h3 text-danger">
                                                            <i class="fa fa-trash">
                                                            </i>
                                                        </span>
                                                    </button>
                                                </input>
                                            </form>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="single-product-v1.html">
                                                <img alt="" height="90" src="{{ url(Storage::url('sistem/photos/' . $item->associatedModel->prod_imagen)) }}" width="90">
                                                </img>
                                            </a>
                                        </td>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <dl class="variation">
                                                <dt class="variation-Baseprice">
                                                    {{ $item->associatedModel->prod_descripcion }}
                                                </dt>
                                            </dl>
                                        </td>
                                        <td>
                                            {{$item->price}}
                                        </td>
                                        <td>
                                            {{$item->quantity}}
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    $
                                                </span>
                                                {{$item->quantity * $item->price}}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <form action="{{route('Cliente.Pedido.Store')}}" method="post">
                                <div class="row col-12">
                                    <label for="coupon_code">
                                        Direccion de entrega:
                                    </label>
                                    <input class="form-control" id="coupon_code" name="lugarentrega" placeholder=" Direccion de entrega" type="text" required="">
                                    </input>
                                </div>
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>
                                            Total
                                        </h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="order-total">
                                                    <th>
                                                        Total
                                                    </th>
                                                    <td data-title="Total">
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    S/.
                                                                </span>
                                                                {{Cart::getTotal()}}
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="actions" colspan="6">
                                                        {{ csrf_field() }}
                                                        <input class="button" name="update_cart" type="submit" value="Guardar pedido">
                                                        </input>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                            @else
                            Carrito vacio
                            @endif
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->
            </main>
            <!-- #main -->
        </div>
        <!-- #post-## -->
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
