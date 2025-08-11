@extends('adminlte::page')

@section('title', 'Fabricante - Edit')

@section('content_header')
    <h1>Editar Fabricante {{$manufacturer->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('fabricantes.update', $manufacturer)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="des" class="form-control" value="{{$manufacturer->des}}">
                    @error('des')
                        <small class="text-danger">*{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$manufacturer->obs}}</textarea>
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