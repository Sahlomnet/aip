@extends('adminlte::page')

@section('title', 'Red - Edit')

@section('content_header')
    <h1>Editar Red {{$network->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('red.update', $network)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tipo</label>
                            <input type="text" name="type" class="form-control" value="{{$network->type}}">
                            @error('type')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dirección MAC</label>
                            <input type="text" name="mac" class="form-control" value="{{$network->mac}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dirección IP</label>
                            <input type="text" name="ip" class="form-control" value="{{$network->ip}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo / {{$network->asset_id}}</label>
                            <select class="form-control" name="asset_id">
                                <option value=""></option>
                                @foreach ($assets as $asset)
                                @if ($asset->id == $network->asset_id)
                                <option value="{{$asset->id}}" selected>{{$asset->cod}}</option>
                                @else
                                <option value="{{$asset->id}}">{{$asset->cod}}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('asset_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fabricante / {{$network->manufacturer_id}}</label>
                            <select class="form-control" name="manufacturer_id">
                                <option value=""></option>
                                @foreach ($manufacturers as $manufacturer)
                                    @if ($manufacturer->id == $network->manufacturer_id)
                                        <option value="{{$manufacturer->id}}" selected>{{$manufacturer->des}}</option>
                                    @else
                                        <option value="{{$manufacturer->id}}">{{$manufacturer->des}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$network->obs}}</textarea>
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