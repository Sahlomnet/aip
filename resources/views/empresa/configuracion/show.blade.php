@extends('adminlte::page')

@section('title', 'Configuración - Show')

@section('content_header')
    <h1>Configuración</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('configuracion.edit', $company)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="{{$company->name}}" disabled>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre Corto</label>
                            <input type="text" class="form-control" value="{{$company->short_name}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre Comercial</label>
                            <input type="text" class="form-control" value="{{$company->business_name}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RFC</label>
                            <input type="text" class="form-control" value="{{$company->rfc}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Régimen Fiscal</label>
                            <input type="text" class="form-control" value="{{$company->tax_regime}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" class="form-control" value="{{$company->street}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Exterior</label>
                            <input type="text" class="form-control" value="{{$company->ext_number}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Número Interior</label>
                            <input type="text" class="form-control" value="{{$company->int_number}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" class="form-control" value="{{$company->col}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" value="{{$company->city}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" class="form-control" value="{{$company->mun}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" class="form-control" value="{{$company->zip_code}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" value="{{$company->state}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>País</label>
                            <input type="text" class="form-control" value="{{$company->country}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" disabled>{{$company->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$company->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$company->updated_at}}" disabled>
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