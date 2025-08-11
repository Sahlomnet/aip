@extends('adminlte::page')

@section('title', 'Persona - Show')

@section('content_header')
    <h1>Persona {{$people->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('personas.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('personas.edit', $people)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('personas.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" value="{{$people->id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nombre (s)</label>
                    <input type="text" class="form-control" value="{{$people->name}}" disabled>
                </div>
                <div class="form-group">
                    <label>Apellido (s)</label>
                    <input type="text" class="form-control" value="{{$people->last_name}}" disabled>
                </div>
                <div class="form-group">
                    <label>Puesto</label>
                    <input type="text" class="form-control" value="{{$people->position}}" disabled>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" value="{{$people->tel}}" disabled>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{$people->mail}}" disabled>
                </div>
                <div class="form-group">
                    <label>Locación</label>
                    <input type="text" class="form-control" value="{{$people->location->name ?? ''}}" disabled>
                </div>
                <div class="form-group">
                    <label>Ubicación</label>
                    <input type="text" class="form-control" value="{{$people->placement->name ?? ''}}" disabled>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$people->obs}}</textarea>
                </div>
                <div class="form-group">
                    <label>Fecha de Creación</label>
                    <input type="text" class="form-control" value="{{$people->created_at}}" disabled>
                </div>
                <div class="form-group">
                    <label>Fecha de Actualización</label>
                    <input type="text" class="form-control" value="{{$people->updated_at}}" disabled>
                </div>

            </div>

            <div class="card-footer">
                <!-- <button type="hidden" class="btn btn-primary">Guardar</button> -->
            </div>
        </form>
    </div>

@stop

@section('css')
@stop

@section('js')
@stop