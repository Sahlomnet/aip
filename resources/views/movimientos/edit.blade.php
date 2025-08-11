@extends('adminlte::page')

@section('title', 'Movimientos - Edit')

@section('content_header')
    <h1>Editar Movimiento {{$movement->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->
        <form action="{{route('movimientos.update', $movement)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="des" class="form-control" value="{{$movement->des}}">
                            @error('des')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="text" name="movement_date" class="form-control" value="{{$movement->movement_date}}">
                            @error('movement_date')
                                <small  class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <select class="form-control" name="asset_id">
                                @foreach ($assets as $asset)
                                    @if ($asset->id == $movement->asset_id)
                                        <option value="{{$asset->id}}" selected>{{$asset->cod}}</option>
                                    @else
                                        <option value="{{$asset->id}}">{{$asset->cod}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('asset_id')
                                <small  class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ubicación</label>
                            <select class="form-control" name="placement_id">
                                @foreach ($placements as $placement)
                                    @if ($placement->id == $movement->placement_id)
                                        <option value="{{$placement->id}}" selected>{{$placement->name}}</option>
                                    @else
                                        <option value="{{$placement->id}}">{{$placement->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('placement_id')
                                <small  class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$movement->obs}}</textarea>
                    @error('obs')
                        <small  class="text-danger">*{{$message}}</small>
                    @enderror
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