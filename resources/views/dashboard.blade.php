@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    @stop
    
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Activos Asignados</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="assets_allocated_Chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 673px;" width="673" height="250" class="chartjs-render-monitor"></canvas>
                </div>
                <!-- <div class="card-footer">
                    <div class="text-center">
                        <span><a href="#">Ver reporte</a></span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Activos por Categoría</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="assets_category_Chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 673px;" width="673" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <!-- <div class="card-footer">
                    <div class="text-center">
                        <span><a href="#">Ver reporte</a></span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Mantenimiento Preventivo</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="assets_maintenance_Chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 673px;" width="673" height="250" class="chartjs-render-monitor"></canvas>
                </div>
                <!-- <div class="card-footer">
                    <div class="text-center">
                        <span><a href="#">Ver reporte</a></span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Vencimiento de Licencias (Software)</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="assets_software_Chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 673px;" width="673" height="250" class="chartjs-render-monitor"></canvas>
                </div>
                <!-- <div class="card-footer">
                    <div class="text-center">
                        <span><a href="#">Ver reporte</a></span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">CheckList</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">1. Pruebas</span>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">2. Respaldar</span>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">3. Restaurar</span>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">4. Subir a Internet</span>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">5. Documentos</span>
                        </li>
                        <li>
                            <div class="icheck-primary d-inline ml-2"><input type="checkbox" value="" ></div>
                            <span class="text">6. Usuarios</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">Orden de captura</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <li><span class="text">1.- Empresa / Configuración</span></li>
                        <li><span class="text">2.- Empresa / Locaciones</span></li>
                        <li><span class="text">3.- Empresa / Personas</span></li>
                        <li><span class="text">4.- Empresa / Empresa Ubicaciones</span></li>
                        <li><span class="text">5.- Activos</span></li>
                        <li><span class="text">6.- Características</span></li>
                        <li><span class="text">7.- Movimientos</span></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div> -->
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
<!-- chart.js -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<script>
    $(function () {
        ///////////////////////////
        // assets_allocated_Chart
        ///////////////////////////
        var assets_allocated_ChartCanvas = $('#assets_allocated_Chart').get(0).getContext('2d')
        var assets_allocated_Data = {
            labels: [
                'Asignados',
                'No Asignados',
            ],
            datasets: [
                {
                    data: [
                        <?php echo $asignados; ?>,
                        <?php echo $noAsignados; ?>,
                    ],
                    backgroundColor: [
                        '#28a745',
                        '#dc3545',
                    ],
                }
            ]
        }
        var assets_allocated_Options = {
            maintainAspectRatio : false,
            responsive : true,
        }
        new Chart(assets_allocated_ChartCanvas, {
            type: 'doughnut',//pie
            data: assets_allocated_Data,
            options: assets_allocated_Options
        })

        ///////////////////////////
        // assets_category_Chart
        ///////////////////////////
        var assets_category_ChartCanvas = $('#assets_category_Chart').get(0).getContext('2d')
        var assets_category_ChartData = {
            labels  : [
                <?php
                foreach ($categories_asset as $categorie){
                    if ($categorie->assets_count > 0){
                        echo "'".$categorie->cod."',";
                    }
                }
                ?>
            ],
            datasets: [
                {
                    label               : 'Activos',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [
                        <?php
                        foreach ($categories_asset as $categorie){
                            if ($categorie->assets_count > 0){
                                echo $categorie->assets_count.",";
                            }
                        }
                        ?>
                    ]
                },
            ]
        }
        var assets_category_ChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
        new Chart(assets_category_ChartCanvas, {
            type: 'bar',
            data: assets_category_ChartData,
            options: assets_category_ChartOptions
        })


        ///////////////////////////
        // assets_maintenance_Chart
        ///////////////////////////
        var assets_maintenance_ChartCanvas = $('#assets_maintenance_Chart').get(0).getContext('2d')
        var assets_maintenance_Data = {
            labels: [
                'Vigente',
                'Próximo',
                'Vencido',
                'Sin Mantenimiento',
            ],
            datasets: [
                {
                    data: [
                        <?php echo $mantenimiento_correcto; ?>,
                        <?php echo $mantenimiento_proximo; ?>,
                        <?php echo $mantenimiento_vencido; ?>,
                        <?php echo $sin_mantenimiento; ?>,
                    ],
                    backgroundColor: [
                        '#28a745',
                        '#fbbc05',
                        '#dc3545',
                        '#d2d6de',
                    ],
                }
            ]
        }
        var assets_maintenance_Options = {
            maintainAspectRatio : false,
            responsive : true,
        }
        new Chart(assets_maintenance_ChartCanvas, {
            type: 'doughnut',//pie
            data: assets_maintenance_Data,
            options: assets_maintenance_Options
        })
        
        ///////////////////////////
        // assets_software_Chart
        ///////////////////////////
        var assets_software_ChartCanvas = $('#assets_software_Chart').get(0).getContext('2d')
        var assets_software_Data = {
            labels: [
                'Vigentes',
                'Próximas',
                'Vencidas',
                'Sin Vigencia',
            ],
            datasets: [
                {
                    data: [
                        <?php echo $software_vigente; ?>,
                        <?php echo $software_proximo; ?>,
                        <?php echo $software_vencido; ?>,
                        <?php echo $sin_vencimiento; ?>,
                    ],
                    backgroundColor: [
                        '#28a745',
                        '#fbbc05',
                        '#dc3545',
                        '#d2d6de',
                    ],
                }
            ]
        }
        var assets_software_Options = {
            maintainAspectRatio : false,
            responsive : true,
        }
        new Chart(assets_software_ChartCanvas, {
            type: 'doughnut',//pie
            data: assets_software_Data,
            options: assets_software_Options
        })
    })
</script>

@stop
