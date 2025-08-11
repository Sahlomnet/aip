@extends('adminlte::page')

@section('title', 'Personas - Edit')

@section('content_header')
    <h1>Editar Persona {{$people->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('personas.update', $people)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre (s)</label>
                            <input type="text" name="name" class="form-control" value="{{$people->name}}">
                            @error('name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Apellido (s)</label>
                            <input type="text" name="last_name" class="form-control" value="{{$people->last_name}}">
                            @error('last_name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Puesto</label>
                            <input type="text" name="position" class="form-control" value="{{$people->position}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="tel" class="form-control" value="{{$people->tel}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="mail" class="form-control" value="{{$people->mail}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$people->obs}}</textarea>
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