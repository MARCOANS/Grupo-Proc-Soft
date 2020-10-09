@extends('layouts.site',['class'=>'hfeed site'])

@section('header')
@component('components.header-site')
@endcomponent
@endsection

@section('content')


<div class="col-full">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="columns-3">


          <ul class="products">
                    @foreach ($productos as $producto)
                    <li class="product border border-danger">
                        <div class="product-outer">
                            <div class="product-inner borde">
                                <div class="product-image-wrapper">
                                    <a class="woocommerce-LoopProduct-link" href="#">
                                        <img class="img-responsive"  src="{{ url(Storage::url('sistem/photos/' . $producto->prod_imagen)) }}" >
                                        </img>
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <a class="woocommerce-LoopProduct-link" href="#">
                                        <h3>
                                            {{ $producto->prod_nombre }}
                                        </h3>
                                        <div itemprop="description">
                                            <p style="max-height: none;">
                                                {{ $producto->prod_descripcion }}.
                                            </p>
                                        </div>
                                        <p class="text-primary h3">
                                            S/.{{ $producto->prod_precio }}
                                        </p>
                                    </a>
                                    <div class="">
                                        <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="51" data-product_sku="" data-quantity="1" href="#" rel="nofollow">
                                            Agregar al carrito
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product-outer -->
                    </li>
                    @endforeach
                </ul>
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
