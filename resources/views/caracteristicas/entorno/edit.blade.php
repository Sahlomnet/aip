@extends('adminlte::page')

@section('title', 'Entorno - Edit')

@section('content_header')
    <h1>Editar Entorno {{$environment->id}}</h1>
@stop

@section('content')

    <div class="card">
        <!-- <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div> -->

        
        <form action="{{route('entorno.update', $environment)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$environment->name}}">
                            @error('name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Grupo / Dominio</label>
                            <input type="text" name="domain_group" class="form-control" value="{{$environment->domain_group}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="user" class="form-control" value="{{$environment->user}}">
                            @error('user')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" autocomplete="current-password" id="id_password" value="{{$environment->password}}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="far fa-eye" id="togglePassword"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Puerto RDP</label>
                            <input type="text" name="rdp_port" class="form-control" value="{{$environment->rdp_port}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <select class="form-control" name="asset_id">
                                <option value=""></option>
                                @foreach ($assets as $asset)
                                    @if ($asset->id == $environment->asset_id)
                                        <option value="{{$asset->id}}" selected>{{$asset->cod}}</option>
                                    @else
                                        <option value="{{$asset->id}}">{{$asset->cod}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('asset_id')
                                <small  class="text-danger">*{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5">{{$environment->obs}}</textarea>
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
        $('#purchase_date').datetimepicker({
            format: 'DD/MM/YYYY'
        });
        $('#inventory_date').datetimepicker({
            format: 'DD/MM/YYYY'
        });

        $(function () {
            bsCustomFileInput.init();
        });

        //Bootstrap Switch
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
        
    </script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#id_password');

          togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') == 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

    </script>    
@stop