@extends('adminlte::page')

@section('title', 'Persona - Create')

@section('content_header')
    <h1>Nueva Persona</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('personas.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre (s)</label>
                            <input type="text" name="name" class="form-control" placeholder="Nombre (s) ..." value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Apellido (s)</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Apellido (s) ..." value="{{old('last_name')}}">
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
                            <input type="text" name="position" class="form-control" placeholder="Puesto ..." value="{{old('position')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="tel" class="form-control" placeholder="Teléfono ..." value="{{old('tel')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="mail" class="form-control" placeholder="Email ..." value="{{old('mail')}}">
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
@stop

@section('js')
@stop