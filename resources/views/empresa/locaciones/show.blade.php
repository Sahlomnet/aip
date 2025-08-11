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
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4 text-center">
                    <img src="{{ asset('img/locations/no_image_500.png') }}" alt="user-avatar" class="img-circle img-fluid" style="max-width: 300px;">
                </div>
                <div class="col-12 col-sm-8">
                    <h3 class="my-3">{{$location->name}}</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr><th style="width:25%">Dirección:</th><td>
                                    {{$location->street}}
                                    {{" "}}
                                    {{$location->ext_number}}
                                    @if($location->int_number != null)
                                        {{"Interior "}}{{$location->int_number}} 
                                    @endif
                                    <br>
                                    {{"Col. "}}{{$location->col}}
                                    <br>
                                    @if($location->city != null)
                                        {{$location->city}}{{", "}}
                                    @endif
                                    @if($location->mun != null)
                                        {{$location->mun}}{{", "}}
                                    @endif
                                    @if($location->state != null)
                                        {{$location->state}}{{", "}}
                                    @endif
                                    @if($location->country != null)
                                        {{$location->country}}
                                    @endif
                                    @if($location->zip_code != null)
                                        <br>
                                        {{"CP. "}}{{$location->zip_code}}
                                    @endif
                                    
                                </td></tr>
                                <tr><th>Teléfono:</th><td>{{$location->tel}}</td></tr>
                                <tr><th>IP Pública:</th><td>{{$location->public_ip}}</td></tr>
                                <tr><th>DNS Público:</th><td>{{$location->public_dns}}</td></tr>
                                <tr><th>Observaciones:</th><td>{{$location->obs}}</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="locations-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="locations-assets-tab" data-toggle="pill" href="#assets-tab" role="tab" aria-controls="assets-tab" aria-selected="false">Activos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="locations-placements-tab" data-toggle="pill" href="#placements-tab" role="tab" aria-controls="placements-tab" aria-selected="false">Ubicaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="locations-people-tab" data-toggle="pill" href="#people-tab" role="tab" aria-controls="people-tab" aria-selected="false">Personas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="assets-tab" role="tabpanel" aria-labelledby="locations-assets-tab">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Modelo</th>
                                                <th class="text-center">Serie</th>
                                                <th class="text-center">Ubicación</th>
                                                <th class="text-center">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- var_dump () -->
                                            @foreach ($all_assets as $asset)
                                                <tr>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->id ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->cod ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->des ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->model ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->serial ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->placement->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->obs ?? ''}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>    
                                </div>
                                <div class="tab-pane fade" id="placements-tab" role="tabpanel" aria-labelledby="locations-placements-tab">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Locación</th>
                                                <th class="text-center">Persona</th>
                                                <th class="text-center">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($placements as $placement)
                                                <tr>
                                                    <td  class="text-center list-link"><a href="{{route('ubicaciones.show', $placement->id)}}">{{ $placement->id ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ubicaciones.show', $placement->id)}}">{{ $placement->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ubicaciones.show', $placement->id)}}">{{ $placement->location->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ubicaciones.show', $placement->id)}}">{{ $placement->people->name ?? ''}}{{' '}}{{ $placement->people->last_name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ubicaciones.show', $placement->id)}}">{{ $placement->obs ?? ''}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>    
                                </div>
                                <div class="tab-pane fade" id="people-tab" role="tabpanel" aria-labelledby="locations-people-tab">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Apellido</th>
                                                <th class="text-center">Puesto</th>
                                                <th class="text-center">Teléfono</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_persons as $person)
                                                <tr>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->id ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->last_name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->position ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->tel ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->mail ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('personas.show', $person->id)}}">{{ $person->obs ?? ''}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@section('css')
@stop

@section('js')
@stop