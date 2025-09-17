@extends('adminlte::page')

@section('title', 'Mantenimiento Vigente')

@section('content_header')
    <h1>Activos con Mantenimiento Vigente</h1>
@stop

@section('content')

    <div class="card">
        <div id="header01" class="card-header">
            <div id="div_header01">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <a href="{{route('activos.create')}}" class="btn btn-primary flex-wrap">
                            <i class="fas fa-plus"></i>
                            Nuevo
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 text-right"></div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table id="table01" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Código</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Modelo</th>
                        <th class="text-center">Serie</th>
                        <th class="text-center">Ubicación</th>
                        <th class="text-center">Responsable</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                        <tr>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->id}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->cod}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->des}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->model}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->serial}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->placement->name ?? ''}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->placement->people->name ?? ''}}{{' '}}{{$asset->placement->people->last_name ?? ''}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->manufacturer->des ?? ''}}</a></td>
                            <td  class="text-center list-link"><a href="{{route('activos.show', $asset->id)}}">{{ $asset->obs}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Código</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Modelo</th>
                        <th class="text-center">Serie</th>
                        <th class="text-center">Ubicación</th>
                        <th class="text-center">Responsable</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Observaciones</th>
                    </tr>
                </tfoot>
            </table>    
        </div>
        <div class="card-footer">
            
        </div>
    </div>

@stop

@section('css')
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/1.13.4/css/dataTables.bootstrap5.min.css') }}">
    
    <!-- buttons -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/buttons/2.3.6/css/buttons.bootstrap5.min.css') }}">
    <style>
        .list-link{
            color: black;
            text-decoration: none;
        }
    </style>
@stop

@section('js')
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
    <!-- dataTables -->
    <script src="{{ asset('plugins/datatables/1.13.4/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/1.13.4/js/dataTables.bootstrap5.min.js') }}"></script>
    <!-- buttons -->
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('#table01').DataTable( {
                lengthChange: true,
                buttons:
                [
                    {
                        extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i>',
                        titleAttr: 'Copiar',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'excelHtml5',
                        text:   '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'csvHtml5',
                        text:   '<i class="fas fa-file-csv"></i>',
                        titleAttr: 'Exportar a CSV',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'pdfHtml5',
                        text:   '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'print',
                        text:   '<i class="fa fa-print"></i>',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'colvis',
                        text:   '<i class="fas fa-columns"></i>',
                        titleAttr: 'Columnas',
                        className: 'btn btn-secondary'
                    }
                ],
                "lengthMenu": [[-1, 10, 25, 100], ["Todos", 10, 25, 100]],
                "language":
                {
                    "search":       "Buscar",
                    "lengthMenu":   "Mostrar _MENU_ registros",
                    "info":         "Página _PAGE_ de _PAGES_",
                    "paginate":
                    {
                        "previous": "Anterior",
                        "next":     "Siguiente",
                        "first":    "Primero",
                        "last":     "Último"
                    }
                }
            } );
        
            table.buttons().container().appendTo( '#div_header01 .col-12:eq(1)' );
            // .col-6:eq(0)
        } );
    </script>
@stop