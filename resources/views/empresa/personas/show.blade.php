@extends('adminlte::page')

@section('title', 'Persona - Show')

@section('content_header')
    <h1>Persona {{$people->id}}</h1>
@stop

@section('content')

    <div class="card card-solid">

        <div class="card-header text-right">
            <a href="{{route('personas.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('personas.edit', $people)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('personas.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4 text-center">
                    <img src="{{ asset('img/people/no_image_500.png') }}" alt="user-avatar" class="img-circle img-fluid" style="max-width: 300px;">
                </div>
                <div class="col-12 col-sm-8">
                    <h3 class="my-3">{{$people->name}}{{' '}}{{$people->last_name}}</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr><th style="width:25%">Puesto:</th><td>{{$people->position}}</td></tr>
                                <tr><th>Teléfono:</th><td>{{$people->tel}}</td></tr>
                                <tr><th>Email:</th><td>{{$people->mail}}</td></tr>
                                <tr><th>Observaciones:</th><td>{{$people->obs}}</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>





            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="people-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="people-assets-tab" data-toggle="pill" href="#assets-tab" role="tab" aria-controls="assets-tab" aria-selected="false">Activos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="people-movements-tab" data-toggle="pill" href="#movements-tab" role="tab" aria-controls="movements-tab" aria-selected="false">Movimientos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="people-placements-tab" data-toggle="pill" href="#placements-tab" role="tab" aria-controls="placements-tab" aria-selected="false">Ubicaciones</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="assets-tab" role="tabpanel" aria-labelledby="people-assets-tab">
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
                                <div class="tab-pane fade" id="movements-tab" role="tabpanel" aria-labelledby="people-movements-tab">
                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Asignación</th>
                                                <th class="text-center">Ubicación</th>
                                                <th class="text-center">Activo</th>
                                                <th class="text-center">Observaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- var_dump () -->
                                            @foreach ($all_movements as $movement)
                                                <tr>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->id ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->des ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->movement_date ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->placement->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->asset->des ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('movimientos.show', $movement->id)}}">{{ $movement->obs ?? ''}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>    
                                </div>
                                <div class="tab-pane fade" id="placements-tab" role="tabpanel" aria-labelledby="people-placements-tab">
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
                                            <!-- var_dump () -->
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


                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
        <!-- /.card-body -->
    </div>



@stop

@section('css')
@stop

@section('js')
    <script language="Javascript">
        function imprSelec(name) {
        var ficha = document.getElementById(name);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write( ficha.innerHTML );
        ventimp.document.close();
        ventimp.print( );
        ventimp.close();
        }
	</script>
@stop