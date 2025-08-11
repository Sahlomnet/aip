@extends('adminlte::page')

@section('title', 'Categoría - Create')

@section('content_header')
    <h1>Nueva Categoría</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('categorias.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="cod" class="form-control" placeholder="Código ..." value="{{old('cod')}}">
                            @error('cod')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="des" class="form-control" placeholder="Descripción ..." value="{{old('des')}}">
                            @error('des')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" placeholder="Observaciones ...">{{old('obs')}}</textarea>
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