@extends('adminlte::page')

@section('title', 'Locaciones - Create')

@section('content_header')
    <h1>Nueva Locación</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('locaciones.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Nombre ..." value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="tel" class="form-control" placeholder="Teléfono ..." value="{{old('tel')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>IP Pública</label>
                            <input type="text" name="public_ip" class="form-control" placeholder="IP Pública ..." value="{{old('public_ip')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>DNS Público</label>
                            <input type="text" name="public_dns" class="form-control" placeholder="DNS Público ..." value="{{old('public_dns')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="street" class="form-control" placeholder="Calle ..." value="{{old('street')}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número exterior</label>
                            <input type="text" name="ext_number" class="form-control" placeholder="Número exterior ..." value="{{old('ext_number')}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número interior</label>
                            <input type="text" name="int_number" class="form-control" placeholder="Número interior ..." value="{{old('int_number')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" name="col" class="form-control" placeholder="Colonia ..." value="{{old('col')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" name="city" class="form-control" placeholder="Ciudad ..." value="{{old('city')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" name="mun" class="form-control" placeholder="Municipio ..." value="{{old('mun')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" name="zip_code" class="form-control" placeholder="Código Postal ..." value="{{old('zip_code')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="state" class="form-control" placeholder="Estado ..." value="{{old('state')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>País</label>
                            <input type="text" name="country" class="form-control" placeholder="País ..." value="{{old('country')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" placeholder="Observaciones ...">{{old('obs')}}</textarea>
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