@extends('adminlte::page')

@section('title', 'Direcciones - Edit')

@section('content_header')
    <h1>Editar Dirección</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('direcciones.update', $address)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" value="{{$address->id}}" disabled>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$address->name}}">
                </div>
                <div class="form-group">
                    <label>Calle</label>
                    <input type="text" name="street" class="form-control" value="{{$address->street}}">
                </div>
                <div class="form-group">
                    <label>Número exterior</label>
                    <input type="text" name="ext_number" class="form-control" value="{{$address->ext_number}}">
                </div>
                <div class="form-group">
                    <label>Número interior</label>
                    <input type="text" name="int_number" class="form-control" value="{{$address->int_number}}">
                </div>
                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text" name="col" class="form-control" value="{{$address->col}}">
                </div>
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" name="city" class="form-control" value="{{$address->city}}">
                </div>
                <div class="form-group">
                    <label>Municipio</label>
                    <input type="text" name="mun" class="form-control" value="{{$address->mun}}">
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="state" class="form-control" value="{{$address->state}}">
                </div>
                <div class="form-group">
                    <label>País</label>
                    <input type="text" name="country" class="form-control" value="{{$address->country}}">
                </div>
                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" name="zip_code" class="form-control" value="{{$address->zip_code}}">
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$address->obs}}</textarea>
                </div>
                <div class="form-group">
                    <label>Fecha de Creación</label>
                    <input type="text" name="created_at" class="form-control" value="{{$address->created_at}}" disabled>
                </div>
                <div class="form-group">
                    <label>Fecha de Actualización</label>
                    <input type="text" name="updated_at" class="form-control" value="{{$address->updated_at}}" disabled>
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