@extends('adminlte::page')

@section('title', 'Entorno - Show')

@section('content_header')
    <h1>Entorno {{$environment->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('entorno.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('entorno.edit', $environment)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('entorno.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>


        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="{{$environment->name}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Grupo / Dominio</label>
                            <input type="text" class="form-control" value="{{$environment->domain_group}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" value="{{$environment->user}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" autocomplete="current-password" required="" id="id_password" value="{{$environment->password}}" disabled>
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
                            <input type="text" class="form-control" value="{{$environment->rdp_port}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activo</label>
                            <input type="text" class="form-control" value="{{$environment->asset->cod ?? ''}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea name="obs" class="form-control" rows="5" disabled>{{$environment->obs}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Creación</label>
                            <input type="text" class="form-control" value="{{$environment->created_at}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de Actualización</label>
                            <input type="text" class="form-control" value="{{$environment->updated_at}}" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <!-- <button type="hidden" class="btn btn-primary">Guardar</button> -->
            </div>
        </form>
    </div>

@stop

@section('css')
@stop

@section('js')
    <script>
        const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#id_password');

          togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

    </script>
@stop