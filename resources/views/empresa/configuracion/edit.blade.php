@extends('adminlte::page')

@section('title', 'Configuración - Edit')

@section('content_header')
    <h1>Editar Configuración</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('configuracion.update', $company)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$company->name}}">
                    @error('name')
                        <small class="text-danger">*{{$message}}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre Corto</label>
                            <input type="text" name="short_name" class="form-control" value="{{$company->short_name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre Comercial</label>
                            <input type="text" name="business_name" class="form-control" value="{{$company->business_name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RFC</label>
                            <input type="text" name="rfc" class="form-control" value="{{$company->rfc}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Régimen Fiscal</label>
                            <input type="text" name="tax_regime" class="form-control" value="{{$company->tax_regime}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="street" class="form-control" value="{{$company->street}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Exterior</label>
                            <input type="text" name="ext_number" class="form-control" value="{{$company->ext_number}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Interior</label>
                            <input type="text" name="int_number" class="form-control" value="{{$company->int_number}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" name="col" class="form-control" value="{{$company->col}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" name="city" class="form-control" value="{{$company->city}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" name="mun" class="form-control" value="{{$company->mun}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md4">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" name="zip_code" class="form-control" value="{{$company->zip_code}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="state" class="form-control" value="{{$company->state}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>País</label>
                            <input type="text" name="country" class="form-control" value="{{$company->country}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$company->obs}}</textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@stop

@section('js')
    <!-- jQuery -->
    <script type="text/javascript"  src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
    <!-- InputMask -->
    <script type="text/javascript" src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script type="text/javascript" src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Custom File Input -->
    <script type="text/javascript" src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>
        //Date picker
        $('#purchase_date').datetimepicker({
            format: 'DD/MM/YYYY'
        });
        $('#inventory_date').datetimepicker({
            format: 'DD/MM/YYYY'
        });

        $(function () {
            bsCustomFileInput.init();
        });

        //Bootstrap Switch
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
        
    </script>
@stop