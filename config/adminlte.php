<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'Inventario - ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Sahlom</b>',
    'logo_img' => 'img/logoSahlomWhite280.png',
    'logo_img_class' => 'brand-image img-circle elevation-3 ml-1',
    'logo_img_xl' => 'img/logoSahlom510x115.png',
    'logo_img_xl_class' => 'brand-image-xs ml-4',
    'logo_img_alt' => 'Logo Inventario',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => false,
        'img' => [
            'path' => 'img/logoSahlomWhite280.png',
            'alt' => 'Inventario Preloader',
            'effect' => 'animation__shake',
            'width' => 150,
            'height' => 150,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,
    'classes' => 'nav-child-indent',

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-primary',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => 'nav-child-indent',
    'classes_topnav' => 'navbar-primary navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
            // 'topnav' => true,
            // 'topnav_user' => true,
        ],
        [
            'type'         => 'darkmode-widget',
            'topnav_right' => true, 
        ],
        // Sidebar items:
        // [
        //     'type' => 'sidebar-menu-search',
        //     'text' => 'search',
        // ],
        // [
            // 'text' => 'blog',
            // 'url'  => 'admin/blog',
            // 'can'  => 'manage-blog',
        // ],
        // [
        //     'text'        => 'pages',
        //     'url'         => 'admin/pages',
        //     'icon'        => 'far fa-fw fa-file',
        //     'label'       => 4,
        //     'label_color' => 'success',
        // ],
        // ['header' => 'account_settings'],
        [
            'text' => 'Inicio',
            // 'url'  => 'dashboard',
            'route'=> 'dashboard',
            'icon' => 'fas fa-chart-line',
        ],
        [
            'text' => 'Activos',
            // 'url'  => '#',
            'route'=> 'activos.index',
            'icon' => 'fas fa-file-invoice-dollar',
            'active' => ['activos', 'activos/create', 'regex:@^activos/[0-9]+$@', 'regex:@^activos/[0-9]/edit+$@'],
        ],
        [
            'text' => 'Movimientos',
            // 'url'  => '#',
            'route'=> 'movimientos.index',
            'icon' => 'fas fa-people-arrows',
            'active' => ['movimientos', 'movimientos/create', 'regex:@^movimientos/[0-9]+$@', 'regex:@^movimientos/[0-9]/edit+$@'],
        ],
        [
            'text'    => 'Características
            ',
            'icon'    => 'fas fa-laptop',
            'submenu' => [
                [
                    'text' => 'Entorno',
                    // 'url'  => '#',
                    'route'=> 'entorno.index',
                    'icon' => 'fas fa-info-circle',
                    'active' => ['entorno', 'entorno/create', 'regex:@^entorno/[0-9]+$@', 'regex:@^entorno/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Procesadores',
                    // 'url'  => '#',
                    'route'=> 'procesador.index',
                    'icon'    => 'fas fa-microchip',
                    'active' => ['procesador', 'procesador/create', 'regex:@^procesador/[0-9]+$@', 'regex:@^procesador/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'RAM',
                    // 'url'  => '#',
                    'route'=> 'ram.index',
                    'icon'    => 'fas fa-memory',
                    'active' => ['ram', 'ram/create', 'regex:@^ram/[0-9]+$@', 'regex:@^ram/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Almacenamiento',
                    // 'url'  => '#',
                    'route'=> 'almacenamiento.index',
                    'icon' => 'fas fa-hdd',
                    'active' => ['almacenamiento', 'almacenamiento/create', 'regex:@^almacenamiento/[0-9]+$@', 'regex:@^almacenamiento/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Red',
                    // 'url'  => '#',
                    'route'=> 'red.index',
                    'icon' => 'fas fa-network-wired',
                    'active' => ['red', 'red/create', 'regex:@^red/[0-9]+$@', 'regex:@^red/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Software',
                    // 'url'  => '#',
                    'route'=> 'software.index',
                    'icon' => 'fab fa-windows',
                    'active' => ['software', 'software/create', 'regex:@^software/[0-9]+$@', 'regex:@^software/[0-9]/edit+$@'],
                ],
            ],
        ],
        [
            'text'    => 'Catálogo',
            'icon'    => 'fas fa-book',
            'submenu' => [
                [
                    'text' => 'Categorías',
                    // 'url'  => '#',
                    'route'=> 'categorias.index',
                    'icon'    => 'fas fa-swatchbook',
                    'active' => ['categorias', 'categorias/create', 'regex:@^categorias/[0-9]+$@', 'regex:@^categorias/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Fabricantes',
                    // 'url'  => '#',
                    'route'=> 'fabricantes.index',
                    'icon'    => 'fas fa-industry',
                    'active' => ['fabricantes', 'fabricantes/create', 'regex:@^fabricantes/[0-9]+$@', 'regex:@^fabricantes/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Estatus',
                    // 'url'  => '#',
                    'route'=> 'estatus.index',
                    'icon' => 'fas fa-thermometer-empty',
                    'active' => ['estatus', 'estatus/create', 'regex:@^estatus/[0-9]+$@', 'regex:@^estatus/[0-9]/edit+$@'],
                ],
            ],
        ],
        [
            'text'    => 'Empresa',
            'icon'    => 'fas fa-industry',
            'submenu' => [
                [
                    'text' => 'Configuración',
                    // 'url'  => '#',
                    'route'=> 'configuracion.index',
                    'icon' => 'fas fa-cogs',
                    'active' => ['configuracion', 'configuracion/create', 'regex:@^configuracion/[0-9]+$@', 'regex:@^configuracion/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Locaciones',
                    // 'url'  => '#',
                    'route'=> 'locaciones.index',
                    'icon' => 'far fa-building',
                    'active' => ['locaciones', 'locaciones/create', 'regex:@^locaciones/[0-9]+$@', 'regex:@^locaciones/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Ubicaciones',
                    // 'url'  => '#',
                    'route'=> 'ubicaciones.index',
                    'icon' => 'fas fa-thumbtack',
                    'active' => ['ubicaciones', 'ubicaciones/create', 'regex:@^ubicaciones/[0-9]+$@', 'regex:@^ubicaciones/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Personas',
                    // 'url'  => '#',
                    'route'=> 'personas.index',
                    'icon' => 'fas fa-user',
                    'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                ],
            ],
        ],

        [
            'text' => 'Reportes',
            'icon' => 'fas fa-file-medical-alt',
            'submenu' => [
                [
                    'text' => 'Equipo de Cómputo',
                    // 'url'  => '#',
                    'route'=> 'reportes.activoscomputo',
                    'icon'    => 'fas fa-laptop',
                    // 'active' => ['locaciones', 'locaciones/create', 'regex:@^locaciones/[0-9]+$@', 'regex:@^locaciones/[0-9]/edit+$@'],
                ],
                [
                    'text' => 'Activos',
                    'url' => '#',
                    'icon' => 'fas fa-file-invoice-dollar',
                    'submenu' => [
                        [
                            'text' => 'por persona',
                            // 'url'  => '#',
                            'route'=> 'reportes.activosporpersona',
                            'icon' => 'fas fa-user',
                            // 'active' => ['categorias', 'categorias/create', 'regex:@^categorias/[0-9]+$@', 'regex:@^categorias/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Asignados',
                            // 'url'  => '#',
                            'route'=> 'reportes.activosasignados',
                            'icon' => 'far fa-check-circle',
                            // 'active' => ['direcciones', 'direcciones/create', 'regex:@^direcciones/[0-9]+$@', 'regex:@^direcciones/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'No Asignados',
                            // 'url'  => '#',
                            'route'=> 'reportes.activosnoasignados',
                            'icon' => 'far fa-times-circle',
                            // 'active' => ['ubicaciones', 'ubicaciones/create', 'regex:@^ubicaciones/[0-9]+$@', 'regex:@^ubicaciones/[0-9]/edit+$@'],
                        ],
                    ],
                ],
                [
                    'text' => 'Mantenimiento',
                    'url' => '#',
                    'icon' => 'fas fa-toolbox',
                    'submenu' => [
                        [
                            'text' => 'Vigente',
                            // 'url'  => '#',
                            'route'=> 'reportes.mantenimientovigente',
                            'icon' => 'far fa-calendar-check',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Próximo',
                            // 'url'  => '#',
                            'route'=> 'reportes.mantenimientoproximo',
                            'icon' => 'far fa-clock',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Vencido',
                            // 'url'  => '#',
                            'route'=> 'reportes.mantenimientovencido',
                            'icon' => 'far fa-calendar-times',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Libre',
                            // 'url'  => '#',
                            'route'=> 'reportes.sinmantenimiento',
                            'icon' => 'fas fa-hands-helping',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                    ],


                ],
                [
                    'text' => 'Software',
                    'url' => '#',
                    'icon' => 'fab fa-windows',
                    'submenu' => [
                        [
                            'text' => 'Vigente',
                            // 'url'  => '#',
                            'route'=> 'reportes.softwarevigente',
                            'icon' => 'far fa-calendar-check',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Próximo',
                            // 'url'  => '#',
                            'route'=> 'reportes.softwareproximo',
                            'icon' => 'far fa-clock',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Vencido',
                            // 'url'  => '#',
                            'route'=> 'reportes.softwarevencido',
                            'icon' => 'far fa-calendar-times',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],
                        [
                            'text' => 'Libre',
                            // 'url'  => '#',
                            'route'=> 'reportes.softwarelibre',
                            'icon' => 'fas fa-hands-helping',
                            // 'active' => ['personas', 'personas/create', 'regex:@^personas/[0-9]+$@', 'regex:@^personas/[0-9]/edit+$@'],
                        ],

                    ],
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
