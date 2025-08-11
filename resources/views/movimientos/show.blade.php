@extends('adminlte::page')

@section('title', 'Movimientos - Show')

@section('content_header')
    <h1>Movimiento {{$movement->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('movimientos.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('movimientos.edit', $movement)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('movimientos.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <!-- <p>{{$movement->des}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->des}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha</label>
                            <!-- <p>{{$movement->movement_date}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->movement_date}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <!-- <p>{{$movement->asset->des}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->asset->des}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ubicación</label>
                            <!-- <p>{{$movement->placement->name}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->placement->name}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <!-- <p>{{$movement->obs}}</p> -->
                    <textarea name="obs" class="form-control" rows="5" disabled>{{$movement->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <!-- <p>{{$movement->created_at}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <!-- <p>{{$movement->updated_at}}</p> -->
                            <input type="text" class="form-control" value="{{$movement->updated_at}}" disabled>
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