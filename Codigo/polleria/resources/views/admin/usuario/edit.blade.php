@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu',['activeUsuario'=>'active','expandedUsuario'=>'true','showUsuario'=>'show','activeUsuarioEdit'=>'active'])
@endcomponent
@endsection

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
                            Actualizar Usuario
                        </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form id="form-registro">
                    <input name="_method" type="hidden" value="PUT"/>
                    <input id="token" name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Nombre
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="usu_nombres" required="" type="text" value="{{ $usuario->usu_nombres }}"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right">
                            Apellido Paterno
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="usu_appaterno" required="" type="text" value="{{ $usuario->usu_appaterno }}">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Apellido Materno
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="usu_apmaterno" required="" type="text" value="{{ $usuario->usu_apmaterno }}">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Correo
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="usu_correo" required="" type="email" value="{{ $usuario->usu_correo }}">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Telefono
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control form-control-sm" name="usu_telefono" required="" type="text" value="{{ $usuario->usu_telefono }}">
                            </input>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js">
</script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles" rel="stylesheet">
    <script src="{{ asset('assets/dashboard/js/file-upload-with-preview.min.js') }}">
    </script>
    <script type="text/javascript">
        //var firstUpload = new FileUploadWithPreview('myFirstImage');
    jQuery(function($) {


        $("#form-registro").submit(function(e) {
    event.preventDefault();

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    
    
    $.ajax({
           type: "POST",
           url: '{{ route('Admin.Usuario.Edit',['usuario' => $usuario]) }}',
            dataType:'json',
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               Swal.fire(data.message);
                
           }
         });

    
});
    })
    </script>
    @endsection
</link>