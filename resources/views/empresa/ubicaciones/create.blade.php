@extends('adminlte::page')

@section('title', 'Ubicación - Create')

@section('content_header')
    <h1>Nueva Ubicación</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('ubicaciones.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre ..." value="{{old('name')}}">
                    @error('name')
                        <small class="text-danger">*{{$message}}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Locación</label>
                            <select class="form-control" name="location_id">
                                <option value="" selected></option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id}}">{{ $location->name}}</option>
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
                                <option value="" selected></option>
                                @foreach ($people as $person)
                                    <option value="{{ $person->id}}">{{$person->name ?? ''}}{{' '}}{{$person->last_name ?? ''}}</option>
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
                    <textarea name="obs" class="form-control" rows="5" placeholder="Observaciones ..."></textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop