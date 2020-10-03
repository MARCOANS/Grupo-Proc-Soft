@extends('layouts.dashboard')

@section('header')
@component('components.dashboard.header')
@endcomponent
@endsection

@section('menu')
@component('components.dashboard.menu')
@endcomponent

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
                    Nombres
                </th>
                <th>
                    Ap Paterno
                </th>
                <th>
                    Ap Materno
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Telefono
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

@section('footer')
@component('components.dashboard.footer')
@endcomponent
@endsection

@section('script')
<script src="{{asset('assets/dashboard/js/datatables.js') }}">
</script>
<script type="text/javascript">
    //var firstUpload = new FileUploadWithPreview('myFirstImage');
    jQuery(function($) {

       $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 ,
             "ajax": "{{ route('Admin.User.GetAll') }}"
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
