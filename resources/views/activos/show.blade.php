@extends('adminlte::page')

@section('title', 'Activo - Show')

@section('content_header')
    <h1>Activo {{$asset->id}}</h1>
@stop

@section('content')

    <div class="card card-solid">

        <div class="card-header text-right">
            <a href="{{route('activos.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('activos.edit', $asset)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('activos.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{$asset->cod}}</h3>
                    <div class="col-12">
                        <img src="{{ asset('img/assets/'.$asset->cod.'.png') }}" class="product-image" alt="Product Image">
                    </div>
                    <!-- <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb" ><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
                    </div> -->
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3 text-center">Código: {{$asset->cod}}</h3>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr><th style="width:40%">Descripción:</th><td>{{$asset->des}}</td></tr>
                                <tr><th>Modelo:</th><td>{{$asset->model}}</td></tr>
                                <tr><th>Fabricante:</th><td>{{$asset->manufacturer->des ?? ''}}</td></tr>
                                <tr><th>Categoría:</th><td>{{$asset->category->des ?? ''}}</td></tr>
                                <tr><th>Estatus:</th><td>{{$asset->status->des ?? ''}}</td></tr>
                                <tr><th>Serie:</th><td>{{$asset->serial}}</td></tr>
                                <tr><th style="width:40%">Locación:</th><td>{{ $asset->placement->location->name ?? ''}}</td></tr>
                                <tr><th>Ubicación:</th><td>{{$asset->placement->name ?? ''}}</td></tr>
                                <tr><th>Responsable:</th><td>{{ $asset->placement->people->name ?? ''}}{{' '}}{{$asset->placement->people->last_name ?? ''}}</td></tr>
                                <tr><th>Uso:</th><td>{{$asset->usage->des ?? ''}}</td></tr>
                                <tr><th>Observaciones:</th><td>{{$asset->obs}}</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- <h4>Available Colors</h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center active">
                            <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                            Green
                            <br>
                            <i class="fas fa-circle fa-2x text-green"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                            Blue
                            <br>
                            <i class="fas fa-circle fa-2x text-blue"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                            Purple
                            <br>
                            <i class="fas fa-circle fa-2x text-purple"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                            Red
                            <br>
                            <i class="fas fa-circle fa-2x text-red"></i>
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                            Orange
                            <br>
                            <i class="fas fa-circle fa-2x text-orange"></i>
                        </label>
                    </div>

                    <h4 class="mt-3">Size <small>Please select one</small></h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                            <span class="text-xl">S</span>
                            <br>
                            Small
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                            <span class="text-xl">M</span>
                            <br>
                            Medium
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                            <span class="text-xl">L</span>
                            <br>
                            Large
                        </label>
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                            <span class="text-xl">XL</span>
                            <br>
                            Xtra-Large
                        </label>
                    </div>

                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                        $80.00
                        </h2>
                        <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                        </h4>
                    </div>

                    <div class="mt-4">
                        <div class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Add to Cart
                        </div>

                        <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div> -->

                </div>
            </div>





            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="asset-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="asset-features-tab" data-toggle="pill" href="#features-tab" role="tab" aria-controls="features-tab" aria-selected="false">Características</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="asset-maintenance-tab" data-toggle="pill" href="#maintenance-tab" role="tab" aria-controls="maintenance-tab" aria-selected="false">Mantenimiento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="asset-purchase-tab" data-toggle="pill" href="#purchase-tab" role="tab" aria-controls="purchase-tab" aria-selected="false">Compra</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="asset-movements-tab" data-toggle="pill" href="#movements-tab" role="tab" aria-controls="movements-tab" aria-selected="false">Movimientos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="asset-qr-tab" data-toggle="pill" href="#qr-tab" role="tab" aria-controls="qr-tab" aria-selected="false">QR</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="features-tab" role="tabpanel" aria-labelledby="asset-features-tab">
                                    @if (!$processors->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseProcessors">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Procesador
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseProcessors" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Fabricante</th>
                                                                <th class="text-center">Descripción</th>
                                                                <th class="text-center">Frecuencia</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($processors as $processor)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('procesador.show', $processor->id)}}">{{ $processor->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('procesador.show', $processor->id)}}">{{ $processor->manufacturer->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('procesador.show', $processor->id)}}">{{ $processor->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('procesador.show', $processor->id)}}">{{ $processor->frequency ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('procesador.show', $processor->id)}}">{{ $processor->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!$rams->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseRam">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Ram
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseRam" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Fabricante</th>
                                                                <th class="text-center">Interfaz</th>
                                                                <th class="text-center">Velocidad</th>
                                                                <th class="text-center">Capacidad</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($rams as $ram)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->manufacturer->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->interface ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->speed ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->capacity ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('ram.show', $ram->id)}}">{{ $ram->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!$storages->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseStorage">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Almacenamiento
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseStorage" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Fabricante</th>
                                                                <th class="text-center">Tipo</th>
                                                                <th class="text-center">Interfaz</th>
                                                                <th class="text-center">Capacidad</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($storages as $storage)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->manufacturer->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->type ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->interface ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->capacity ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('almacenamiento.show', $storage->id)}}">{{ $storage->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!$networks->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseNetwork">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Red
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseNetwork" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Fabricante</th>
                                                                <th class="text-center">Tipo</th>
                                                                <th class="text-center">Dirección MAC</th>
                                                                <th class="text-center">Dirección IP</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($networks as $network)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->manufacturer->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->type ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->mac ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->ip ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('red.show', $network->id)}}">{{ $network->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!$licenses->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseSoftware">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Software
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseSoftware" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Fabricante</th>
                                                                <th class="text-center">Descripción</th>
                                                                <th class="text-center">Serie</th>
                                                                <th class="text-center">Vigencia</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($licenses as $license)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->manufacturer->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->des ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->serial ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->expiration_date ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('software.show', $license->id)}}">{{ $license->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!$environments->isEmpty())
                                        <div class="card">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseEnvironment">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        Entorno
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseEnvironment" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Nombre</th>
                                                                <th class="text-center">Grupo / Dominio</th>
                                                                <th class="text-center">Usuario</th>
                                                                <th class="text-center">Contraseña</th>
                                                                <th class="text-center">Puerto RDP</th>
                                                                <th class="text-center">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($environments as $environment)
                                                                <tr>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->id ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->name ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->domain_group ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->user ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->password ?? ''}}</a></td>
                                                                    <!-- <td  class="text-center list-link"><a href="{{ asset('rdp/'.$asset->cod.'.zip') }}" download></a></td> -->
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}" >{{ $environment->rdp_port ?? ''}}</a></td>
                                                                    <td  class="text-center list-link"><a href="{{route('entorno.show', $environment->id)}}">{{ $environment->obs ?? ''}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="maintenance-tab" role="tabpanel" aria-labelledby="asset-maintenance-tab">
                                    @if (!$asset->last_maintenance_date || !$asset->frequency || !$asset->next_maintenance_date)
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mx-auto">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr><th>Último Mantenimiento:</th><td>{{$asset->last_maintenance_date}}</td></tr>
                                                            <tr><th>Frecuencia de Mantenimiento:</th><td>{{$asset->maintenance_frequency}} meses</td></tr>
                                                            <tr><th>Próximo Mantenimiento:</th><td>{{$asset->next_maintenance_date}}</td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="purchase-tab" role="tabpanel" aria-labelledby="asset-purchase-tab">
                                    @if (!empty($asset->purchase_date) || !empty($asset->invoice) || !empty($asset->cost))
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mx-auto">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr><th>Fecha de Compra:</th><td>{{$asset->purchase_date}}</td></tr>
                                                            <tr><th>Factura:</th><td><a href="{{ asset($asset->invoice) }}" target="_blank" rel="noopener noreferrer">{{$asset->invoice}}</a></td></tr>
                                                            <tr><th>Costo:</th><td>{{$asset->cost}}</td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="movements-tab" role="tabpanel" aria-labelledby="asset-movements-tab">
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
                                            @foreach ($movements as $movement)
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
                                <div class="tab-pane fade" id="qr-tab" role="tabpanel" aria-labelledby="asset-qr-tab">
                                    <div id="qr_code" class="visible-print text-center">
                                        {!! QrCode::size(200)
                                            ->errorCorrection('H')
                                            ->generate(Request::url()); !!}
                                    </div>
                                    <p class="text-center mt-4">
                                        <a href="javascript:imprSelec('qr_code')" >Imprimir</a>
                                    </p>
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