@extends('adminlte::page')

@section('title', 'Locación - Show')

@section('content_header')
    <h1>Locación {{$location->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('locaciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('locaciones.edit', $location)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('locaciones.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="{{$location->name}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" value="{{$location->tel}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>IP Pública</label>
                            <input type="text" class="form-control" value="{{$location->public_ip}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>DNS Público</label>
                            <input type="text" class="form-control" value="{{$location->public_dns}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" class="form-control" value="{{$location->street}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Exterior</label>
                            <input type="text" class="form-control" value="{{$location->ext_number}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Interior</label>
                            <input type="text" class="form-control" value="{{$location->int_number}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" class="form-control" value="{{$location->col}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" value="{{$location->city}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" class="form-control" value="{{$location->mun}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" class="form-control" value="{{$location->zip_code}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" value="{{$location->state}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>País</label>
                            <input type="text" class="form-control" value="{{$location->country}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" disabled>{{$location->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$location->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$location->updated_at}}" disabled>
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