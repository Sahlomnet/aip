<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\MovementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Welcome
Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('dashboard');
});

// Dashboard
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard
Route::controller(DashboardController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
});

// Catalogo Categorias
Route::controller(CategoryController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/categorias', 'index')->name('categorias.index');
    Route::get('/categorias/create', 'create')->name('categorias.create');
    Route::post('/categorias', 'store')->name('categorias.store');
    Route::get('/categorias/{category}', 'show')->name('categorias.show');
    Route::get('/categorias/{category}/edit', 'edit')->name('categorias.edit');
    Route::put('/categorias/{category}', 'update')->name('categorias.update');
});

// Catalogo Fabricantes
Route::controller(ManufacturerController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/fabricantes', 'index')->name('fabricantes.index');
    Route::get('/fabricantes/create', 'create')->name('fabricantes.create');
    Route::post('/fabricantes', 'store')->name('fabricantes.store');
    Route::get('/fabricantes/{manufacturer}', 'show')->name('fabricantes.show');
    Route::get('/fabricantes/{manufacturer}/edit', 'edit')->name('fabricantes.edit');
    Route::put('/fabricantes/{manufacturer}', 'update')->name('fabricantes.update');
});

// Catalogo Estatus
Route::controller(StatusController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/estatus', 'index')->name('estatus.index');
    Route::get('/estatus/create', 'create')->name('estatus.create');
    Route::post('/estatus', 'store')->name('estatus.store');
    Route::get('/estatus/{status}', 'show')->name('estatus.show');
    Route::get('/estatus/{status}/edit', 'edit')->name('estatus.edit');
    Route::put('/estatus/{status}', 'update')->name('estatus.update');
});

// Activos
Route::controller(AssetController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/activos', 'index')->name('activos.index');
    Route::get('/activos/create', 'create')->name('activos.create');
    Route::post('/activos', 'store')->name('activos.store');
    Route::get('/activos/{asset}', 'show')->name('activos.show');
    Route::get('/activos/{asset}/edit', 'edit')->name('activos.edit');
    Route::put('/activos/{asset}', 'update')->name('activos.update');

    Route::get('/activoscomputo', 'assetcomputer')->name('reportes.activoscomputo');
});

// Personas
Route::controller(PeopleController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/personas', 'index')->name('personas.index');
    Route::get('/personas/create', 'create')->name('personas.create');
    Route::post('/personas', 'store')->name('personas.store');
    Route::get('/personas/{people}', 'show')->name('personas.show');
    Route::get('/personas/{people}/edit', 'edit')->name('personas.edit');
    Route::put('/personas/{people}', 'update')->name('personas.update');

    Route::get('/activosporpersona', 'assetpeople')->name('reportes.activosporpersona');

});

// Locaciones
Route::controller(LocationController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/locaciones', 'index')->name('locaciones.index');
    Route::get('/locaciones/create', 'create')->name('locaciones.create');
    Route::post('/locaciones', 'store')->name('locaciones.store');
    Route::get('/locaciones/{location}', 'show')->name('locaciones.show');
    Route::get('/locaciones/{location}/edit', 'edit')->name('locaciones.edit');
    Route::put('/locaciones/{location}', 'update')->name('locaciones.update');
});

// Ubicaciones
Route::controller(PlacementController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/ubicaciones', 'index')->name('ubicaciones.index');
    Route::get('/ubicaciones/create', 'create')->name('ubicaciones.create');
    Route::post('/ubicaciones', 'store')->name('ubicaciones.store');
    Route::get('/ubicaciones/{placement}', 'show')->name('ubicaciones.show');
    Route::get('/ubicaciones/{placement}/edit', 'edit')->name('ubicaciones.edit');
    Route::put('/ubicaciones/{placement}', 'update')->name('ubicaciones.update');
});

// Configuracion
Route::controller(CompanyController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/configuracion', 'index')->name('configuracion.index');
    // Route::get('/ubicaciones/create', 'create')->name('ubicaciones.create');
    // Route::post('/ubicaciones', 'store')->name('ubicaciones.store');
    Route::get('/configuracion/{company}', 'show')->name('configuracion.show');
    Route::get('/configuracion/{company}/edit', 'edit')->name('configuracion.edit');
    Route::put('/configuracion/{company}', 'update')->name('configuracion.update');
});

// Entorno
Route::controller(EnvironmentController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/entorno', 'index')->name('entorno.index');
    Route::get('/entorno/create', 'create')->name('entorno.create');
    Route::post('/entorno', 'store')->name('entorno.store');
    Route::get('/entorno/{environment}', 'show')->name('entorno.show');
    Route::get('/entorno/{environment}/edit', 'edit')->name('entorno.edit');
    Route::put('/entorno/{environment}', 'update')->name('entorno.update');
});

// Procesadores
Route::controller(ProcessorController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/procesador', 'index')->name('procesador.index');
    Route::get('/procesador/create', 'create')->name('procesador.create');
    Route::post('/procesador', 'store')->name('procesador.store');
    Route::get('/procesador/{processor}', 'show')->name('procesador.show');
    Route::get('/procesador/{processor}/edit', 'edit')->name('procesador.edit');
    Route::put('/procesador/{processor}', 'update')->name('procesador.update');
});

// Rams
Route::controller(RamController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/ram', 'index')->name('ram.index');
    Route::get('/ram/create', 'create')->name('ram.create');
    Route::post('/ram', 'store')->name('ram.store');
    Route::get('/ram/{ram}', 'show')->name('ram.show');
    Route::get('/ram/{ram}/edit', 'edit')->name('ram.edit');
    Route::put('/ram/{ram}', 'update')->name('ram.update');
});

// Almacenamiento
Route::controller(StorageController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/almacenamiento', 'index')->name('almacenamiento.index');
    Route::get('/almacenamiento/create', 'create')->name('almacenamiento.create');
    Route::post('/almacenamiento', 'store')->name('almacenamiento.store');
    Route::get('/almacenamiento/{storage}', 'show')->name('almacenamiento.show');
    Route::get('/almacenamiento/{storage}/edit', 'edit')->name('almacenamiento.edit');
    Route::put('/almacenamiento/{storage}', 'update')->name('almacenamiento.update');
});

// Red
Route::controller(NetworkController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/red', 'index')->name('red.index');
    Route::get('/red/create', 'create')->name('red.create');
    Route::post('/red', 'store')->name('red.store');
    Route::get('/red/{network}', 'show')->name('red.show');
    Route::get('/red/{network}/edit', 'edit')->name('red.edit');
    Route::put('/red/{network}', 'update')->name('red.update');
});

// Software
Route::controller(LicenseController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/software', 'index')->name('software.index');
    Route::get('/software/create', 'create')->name('software.create');
    Route::post('/software', 'store')->name('software.store');
    Route::get('/software/{license}', 'show')->name('software.show');
    Route::get('/software/{license}/edit', 'edit')->name('software.edit');
    Route::put('/software/{license}', 'update')->name('software.update');
});

// Movimientos
Route::controller(MovementController::class)->middleware(['auth', 'verified'])->group(Function(){
    Route::get('/movimientos', 'index')->name('movimientos.index');
    Route::get('/movimientos/create', 'create')->name('movimientos.create');
    Route::post('/movimientos', 'store')->name('movimientos.store');
    Route::get('/movimientos/{movement}', 'show')->name('movimientos.show');
    Route::get('/movimientos/{movement}/edit', 'edit')->name('movimientos.edit');
    Route::put('/movimientos/{movement}', 'update')->name('movimientos.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
