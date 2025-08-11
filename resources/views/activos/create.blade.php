@extends('adminlte::page')

@section('title', 'Activos - Create')

@section('content_header')
    <h1>Nuevo Activo</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('activos.store')}}" method="POST" enctype="multipart/form-data">
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" name="model" class="form-control" placeholder="Modelo ..." value="{{old('model')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Serie</label>
                            <input type="text" name="serial" class="form-control" placeholder="Serie ..." value="{{old('serial')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Imágen (png)</label>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="img" value="{{old('img')}}">
                                <label class="custom-file-label" for="img">Elija un archivo ...</label>
                                @error('img')
                                    <small class="text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fabricante</label>
                            <select class="form-control" name="manufacturer_id">
                                <option value=""></option>
                                @foreach ($manufacturers as $manufacturer)
                                    <option value="{{ $manufacturer->id}}">{{ $manufacturer->des}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Categoría</label>
                            <select class="form-control" name="category_id">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->des}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Estatus</label>
                            <select class="form-control" name="status_id">
                                <option value=""></option>
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id}}">{{ $status->des}}</option>
                                @endforeach
                            </select>
                            @error('status_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Uso</label>
                            <select class="form-control" name="usage_id">
                                <option value=""></option>
                                @foreach ($usages as $usage)
                                    <option value="{{ $usage->id}}">{{ $usage->des}}</option>
                                @endforeach
                            </select>
                            @error('usage_id')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Último mantenimiento</label>
                            <div class="input-group date" id="last_maintenance_date" data-target-input="nearest">
                                <input type="text" name="last_maintenance_date" class="form-control datetimepicker-input" placeholder="Fecha del movimiento" data-target="#last_maintenance_date" value="{{old('last_maintenance_date')}}">
                                <div class="input-group-append" data-target="#last_maintenance_date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Frecuencia de mantenimiento (meses)</label>
                            <select class="form-control" name="maintenance_frequency">
                                <option value="" selected></option>
                                @for ($i =1; $i <= 12; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor  
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Costo (Sin IVA)</label>
                            <input type="text" name="cost" class="form-control" placeholder="Costo ..." value="{{old('cost')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fecha de Compra:</label>
                            <div class="input-group date" id="purchase_date" data-target-input="nearest">
                                <input type="text" name="purchase_date" class="form-control datetimepicker-input" placeholder="Fecha del movimiento" data-target="#purchase_date" value="{{old('purchase_date')}}">
                               
                                <div class="input-group-append" data-target="#purchase_date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('purchase_date')
                                <small  class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Factura</label>
                            <div class="custom-file">
                                <p>a</p>
                                <input type="file" name="invoice" class="custom-file-input" id="invoice" value="a">
                                <label class="custom-file-label" for="invoice">Elija un archivo ...</label>
                            </div>
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
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@stop

@section('js')
    <!-- jQuery -->
    <script type="text/javascript"  src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
    <!-- InputMask -->
    <script type="text/javascript" src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script type="text/javascript" src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Custom File Input -->
    <script type="text/javascript" src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>
        //Date picker
        $('#last_maintenance_date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#purchase_date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $(function () {
            bsCustomFileInput.init();
        });

        //Bootstrap Switch
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
        
    </script>
@stop