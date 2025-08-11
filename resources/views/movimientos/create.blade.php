@extends('adminlte::page')

@section('title', 'Movimientos - Create')

@section('content_header')
    <h1>Nuevo Movimiento</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('movimientos.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="des" class="form-control" placeholder="Descripción ..." value="{{old('des')}}">
                            @error('des')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de movimiento</label>
                            
                            <div class="input-group date" id="movement_date" data-target-input="nearest">
                                <input type="text" name="movement_date" class="form-control datetimepicker-input" placeholder="Fecha del movimiento" data-target="#movement_date" value="{{old('movement_date')}}">
                               
                                <div class="input-group-append" data-target="#movement_date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
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
                                <option value=""></option>
                                @foreach ($assets as $asset)
                                    <option value="{{ $asset->id}}">{{ $asset->cod}}</option>
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
                                <option value=""></option>
                                @foreach ($placements as $placement)
                                    <option value="{{ $placement->id}}">{{ $placement->name}}</option>
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
                    <textarea name="obs" class="form-control" rows="5" placeholder="Observaciones ...">{{old('obs')}}</textarea>
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
        $('#movement_date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@stop