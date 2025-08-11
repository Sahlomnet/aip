@extends('adminlte::page')

@section('title', 'Estatus - Show')

@section('content_header')
    <h1>Estatus {{$status->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('estatus.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('estatus.edit', $status)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('estatus.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" rows="1" disabled>{{$status->des}}</textarea>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$status->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" name="created_at" class="form-control" value="{{$status->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" name="updated_at" class="form-control" value="{{$status->updated_at}}" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
            </div>
        </form>
    </div>

@stop

@section('css')
@stop

@section('js')
@stop