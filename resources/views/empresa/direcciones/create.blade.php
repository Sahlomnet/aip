@extends('adminlte::page')

@section('title', 'Dirección - Create')

@section('content_header')
    <h1>Nueva Dirección</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('direcciones.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Calle</label>
                    <input type="text" name="street" class="form-control" placeholder="Calle ...">
                </div>
                <div class="form-group">
                    <label>Número exterior</label>
                    <input type="text" name="ext_number" class="form-control" placeholder="Número exterior ...">
                </div>
                <div class="form-group">
                    <label>Número interior</label>
                    <input type="text" name="int_number" class="form-control" placeholder="Número interior ...">
                </div>
                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text" name="col" class="form-control" placeholder="Colonia ...">
                </div>
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" name="city" class="form-control" placeholder="Ciudad ...">
                </div>
                <div class="form-group">
                    <label>Municipio</label>
                    <input type="text" name="mun" class="form-control" placeholder="Municipio ...">
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="state" class="form-control" placeholder="Estado ...">
                </div>
                <div class="form-group">
                    <label>País</label>
                    <input type="text" name="country" class="form-control" placeholder="País ...">
                </div>
                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="Código Postal ...">
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" placeholder="Observaciones ..."></textarea>
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