@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu',['activeProducto'=>'active','expandedProducto'=>'true','showProductoNuevo'=>'show','activeProductoNuevo'=>'active'])
@endcomponent

@section('style')
<link href="{{ asset('assets/dashboard/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-lg-12 layout-spacing" id="basic">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>
                            Registro de productos
                        </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form id="form-registro" novalidate="" role="form">
                    <input id="token" name="_token" type="hidden" value="{{csrf_token() }}"/>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Nombre
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="nombre" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Descripcion
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" name="descripcion">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Precio
                        </label>
                        <div class="col-sm-2">
                            <input class="form-control form-control-sm" name="precio" type="number">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Categoria
                        </label>
                        <div class="col-sm-10">
                            <select class="form-control basic" name="categoria">
                                <option selected="selected" value="1">
                                    Pollos
                                </option>
                                <option value="2">
                                    Parrillas
                                </option>
                                <option value="3">
                                    Guarniciones
                                </option>
                                <option value="4">
                                    Bebidas
                                </option>
                                <option value="5">
                                    Promociones
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Imagen
                        </label>
                        <div class="col-sm-10">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>
                                    Cargar imagen
                                    <a class="custom-file-container__image-clear" href="javascript:void(0)" title="Clear Image">
                                        x
                                    </a>
                                </label>
                                <label class="custom-file-container__custom-file">
                                    <input accept="image/*" class="custom-file-container__custom-file__custom-file-input" name="imagen" type="file">
                                        <input name="MAX_FILE_SIZE" type="hidden" value="10485760"/>
                                        <span class="custom-file-container__custom-file__custom-file-control">
                                        </span>
                                    </input>
                                </label>
                                <div class="custom-file-container__image-preview">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <div aria-label="Basic example" class="btn-group ml-20" role="group">
                            <button class="btn btn-danger mb-4 mr-2 btn-lg" type="button">
                                Cancelar
                            </button>
                            <button class="btn btn-success mb-4 mr-2 btn-lg">
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')
<script src="{{ asset('assets/dashboard/js/file-upload-with-preview.min.js') }}">
</script>
<script type="text/javascript">
    var firstUpload = new FileUploadWithPreview('myFirstImage');
        jQuery(function($) {


        $("#form-registro").submit(function(e) {
    event.preventDefault();

    e.preventDefault(); // avoid to execute the actual submit of the form.

    
     var formData=new FormData($('#form-registro')[0]);
    
    $.ajax({
           type: "POST",
           url: '{{ route('Admin.Producto.Store') }}',
           data: formData, // serializes the form's elements.
            dataType:'json',
           cache: false,
    contentType: false,
    processData: false,


             
   
  


           success: function(data)
           {
               Swal.fire(data.message);
                 $('#form-registro')[0].reset();
           }
         });

    
});
    })
</script>
@endsection
