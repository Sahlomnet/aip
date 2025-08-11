@extends('adminlte::page')

@section('title', 'Ubicaciones - Show')

@section('content_header')
    <h1>Ubicación {{$placement->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('ubicaciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('ubicaciones.edit', $placement)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('ubicaciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" value="{{$placement->id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="{{$placement->name}}" disabled>
                </div>
                <div class="form-group">
                    <label>Locación</label>
                    <input type="text" class="form-control" value="{{$placement->location->name ?? ''}}" disabled>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$placement->obs}}</textarea>
                </div>
                <div class="form-group">
                    <label>Fecha de Creación</label>
                    <input type="text" class="form-control" value="{{$placement->created_at}}" disabled>
                </div>
                <div class="form-group">
                    <label>Fecha de Actualización</label>
                    <input type="text" class="form-control" value="{{$placement->updated_at}}" disabled>
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