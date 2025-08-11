@extends('adminlte::page')

@section('title', 'RAM - Show')

@section('content_header')
    <h1>RAM {{$ram->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('ram.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('ram.edit', $ram)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('ram.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Interfaz</label>
                            <input type="text" class="form-control" value="{{$ram->interface}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Velocidad</label>
                            <input type="text" class="form-control" value="{{$ram->speed}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Capacidad</label>
                            <input type="text" class="form-control" value="{{$ram->capacity}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <input type="text" class="form-control" value="{{$ram->asset->cod ?? ''}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fabricante</label>
                            <input type="text" class="form-control" value="{{$ram->manufacturer->des ?? ''}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" disabled>{{$ram->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$ram->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$ram->updated_at}}" disabled>
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