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
                <form>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Nombre
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" id="colFormLabelSm" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Descripcion
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Precio
                        </label>
                        <div class="col-sm-2">
                            <input class="form-control form-control-sm" id="colFormLabelSm" type="number">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-right" for="colFormLabelSm">
                            Categoria
                        </label>
                        <div class="col-sm-10">
                            <select class="form-control basic">
                                <option selected="selected">
                                    orange
                                </option>
                                <option>
                                    white
                                </option>
                                <option>
                                    purple
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
                    <div class="d-flex flex-row-reverse">
                        <div aria-label="Basic example" class="btn-group ml-20" role="group">
                            <button class="btn btn-danger mb-4 mr-2 btn-lg" type="button">
                                Cancelar
                            </button>
                           
                            <button class="btn btn-success mb-4 mr-2 btn-lg" type="button">
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
</script>
@endsection
