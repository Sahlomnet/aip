@extends('adminlte::page')

@section('title', 'Almacenamiento - Show')

@section('content_header')
    <h1>Almacenamiento {{$storage->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('almacenamiento.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('almacenamiento.edit', $storage)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('almacenamiento.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tipo</label>
                            <input type="text" class="form-control" value="{{$storage->type}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Interfaz</label>
                            <input type="text" class="form-control" value="{{$storage->interface}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Capacidad</label>
                            <input type="text" class="form-control" value="{{$storage->capacity}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <input type="text" class="form-control" value="{{$storage->asset->des ?? ''}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fabricante</label>
                            <input type="text" class="form-control" value="{{$storage->manufacturer->des ?? ''}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" disabled>{{$storage->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$storage->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$storage->updated_at}}" disabled>
                        </div>
                    </div>
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