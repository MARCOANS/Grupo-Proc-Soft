@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu',['activeProducto'=>'active','expandedProducto'=>'true','showProducto'=>'show','activeProductoTodos'=>'active' ])
@endcomponent
@endsection

@section('style')
<link href="{{ asset('assets/dashboard/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/datatables.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/dashboard/css/dt-global_style.css') }}" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" rel="stylesheet"/>
@endsection

@section('content')
<div class="table-responsive mb-4 mt-4">
    <table class="table table-hover" id="zero-config" style="width:100%">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                  Precio
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Imagen
                </th>
                <th class="no-content">
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>




@endsection
<input id="token" name="_token" type="hidden" value="{{csrf_token() }}"/>
@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
<script src="{{asset('assets/dashboard/js/datatables.js') }}">
</script>
<script type="text/javascript">
  var myTable;   
    jQuery(function($) {

     myTable=   $('#zero-config').DataTable({
           language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 ,
             "ajax": "{{ route('Admin.Producto.GetAll') }}"
        });




    })

  function deleteProducto(ruta) {
        
    Swal.fire({
        title: 'Desea eliminar este registro ?',
        text: "La accion no se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si,eliminar !',
    }).then((result) => {
        if (result.value) {
 token = $("#token").val();
              $.ajax({
               url: ruta,
               method: 'POST',
               dataType: 'json',
               data: {
                _token:token,
                  _method: "DELETE",
               }, success: function (msg) {
                
                  myTable.ajax.reload();
                    Swal.fire('Eliminado', msg.message, 'success')
                   
               }
               ,
            error: function(msg) {
                Swal.fire('Error!', msg.message, 'error')
            }
            });
            
        }
    })
}
</script>
@endsection
