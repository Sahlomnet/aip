@extends('adminlte::page')

@section('title', 'Categoría - Show')

@section('content_header')
    <h1>Categoría {{$category->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('categorias.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('categorias.edit', $category)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('categorias.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" class="form-control" value="{{$category->cod}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" value="{{$category->des}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$category->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$category->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$category->updated_at}}" disabled>
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