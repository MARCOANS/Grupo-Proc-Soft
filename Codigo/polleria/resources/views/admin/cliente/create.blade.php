@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu',['activeCliente'=>'active','expandedCliente'=>'true','showCliente'=>'show','activeClienteCreate'=>'active'])
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
                            Registro de clientes
                        </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form id="form-registro" >
                    <input id="token" name="_token" type="hidden" value="{{csrf_token() }}"/>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Nombre
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="nombre" type="text" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Apellido Paterno
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="paterno" type="text" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Apellido Materno
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="materno" type="text" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Correo
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" name="email" type="email" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Telefono
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control form-control-sm" name="telefono" type="text" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Nombre de usuario
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control form-control-sm" name="usuario" type="text" required="">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Contraseña
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control form-control-sm" name="password" type="text" required="">
                            </input>
                        </div>
                    </div>
                    {{--
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
                                    <input accept="image/*" class="custom-file-container__custom-file__custom-file-input" type="file">
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
                    --}}
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
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
           url: '{{ route('Admin.Cliente.Store') }}',
           data: form.serialize(), // serializes the form's elements.
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
    })

/*   function updateIndicador(ruta,val){
        
    token=$("#token").val();
    $.ajax({
      url: ruta,
      type:'post',
      data:{_token:token,nombre:val},
      dataType:'json',
      beforeSend: function(){ 
        $('#widget-update').aceWidget('startLoading'); 
      },
      success:function(message) {
       getNotas($('#trimestre').val());
      } ,

      error : function(xhr, status) {
      }
    });


  }*/
</script>
@endsection
