@extends('adminlte::page')

@section('title', 'Direcciones - Show')

@section('content_header')
    <h1>Dirección {{$address->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('direcciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('direcciones.edit', $address)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('direcciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
            <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" value="{{$address->id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="{{$address->name}}" disabled>
                </div>
                <div class="form-group">
                    <label>Calle</label>
                    <input type="text" class="form-control" value="{{$address->street}}" disabled>
                </div>
                <div class="form-group">
                    <label>Número Exterior</label>
                    <input type="text" class="form-control" value="{{$address->ext_number}}" disabled>
                </div>
                <div class="form-group">
                    <label>Número Interior</label>
                    <input type="text" class="form-control" value="{{$address->int_number}}" disabled>
                </div>
                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text" class="form-control" value="{{$address->col}}" disabled>
                </div>
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" value="{{$address->city}}" disabled>
                </div>
                <div class="form-group">
                    <label>Municipio</label>
                    <input type="text" class="form-control" value="{{$address->mun}}" disabled>
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input type="text" class="form-control" value="{{$address->state}}" disabled>
                </div>
                <div class="form-group">
                    <label>País</label>
                    <input type="text" class="form-control" value="{{$address->country}}" disabled>
                </div>
                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" class="form-control" value="{{$address->zip_code}}" disabled>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$address->obs}}</textarea>
                </div>
                <div class="form-group">
                    <label>Fecha de Creación</label>
                    <input type="text" class="form-control" value="{{$address->created_at}}" disabled>
                </div>
                <div class="form-group">
                    <label>Fecha de Actualización</label>
                    <input type="text" class="form-control" value="{{$address->updated_at}}" disabled>
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