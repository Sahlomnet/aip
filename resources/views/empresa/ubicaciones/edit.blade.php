@extends('adminlte::page')

@section('title', 'Ubicación - Edit')

@section('content_header')
    <h1>Editar Ubicación {{$placement->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('ubicaciones.update', $placement)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$placement->name}}">
                    @error('name')
                        <small class="text-danger">*{{$message}}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Locación</label>
                            <select class="form-control" name="location_id">
                                <option value=""></option>
                                @foreach($locations as $location)
                                    @if ($location->id == $placement->location_id)
                                        <option value="{{$location->id}}" selected>{{$location->name}}</option>
                                    @else
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('location_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Persona</label>
                            <select class="form-control" name="people_id">
                                <option value=""></option>
                                @foreach($people as $person)
                                    @if ($person->id == $placement->people_id)
                                        <option value="{{$person->id}}" selected>{{$person->name}}{{' '}}{{$person->last_name}}</option>
                                    @else
                                        <option value="{{$person->id}}">{{$person->name}}{{' '}}{{$person->last_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('people_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$placement->obs}}</textarea>
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