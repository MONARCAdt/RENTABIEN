<?php

use App\Http\Controllers\AdminContactanosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPropertyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegistroDeViviendaController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PropertyController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/contactanos', function() {
    return view('contactanos');
})->name('contacto.formulario');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');
Route::post('contactanos/store', [ContactanosController::class, 'store'])->name('contactanos.store');


Route::post('/Propety', [PropertyController::class, 'store'])->name('Propety.store');
Route::get('/filtrar', [PropertyController::class, 'filtrar'])->name('filtrar');


Route::middleware('auth')->group(function () {

    Route::get('/ajustes', function () {return view('ajustes');})->name('ajustes');
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Propety
    Route::get('/dashboard', [PropertyController::class, 'dashboard'])->name('dashboard');
    Route::get('/FiltrarDashboard', [PropertyController::class, 'FiltrarDashboard'])->name('FiltrarDashboard');
    Route::get('/registrodevivienda', function () {return view('registrodevivienda');})->name('registrodevivienda');
    Route::get('/propiedad/{id}', [PropertyController::class, 'show'])->name('propiedad.show');



    //PropetyRegister
    Route::get('/admin/usuarios', function () {return view('/admin/usuarios');})->name('adminusuarios');
    Route::get('/admin/edit', function () {return view('/admin/edit');})->name('admin.edit');
    Route::get('/admin/registrodevivienda', function () {return view('admin/registrodevivienda');})->name('admin.registrodevivienda');

    //ADMINISTRADOR
    Route::get('/admin/dashboard', [AdminPropertyController::class, 'AdminDashboard'])->name('admin.dashboard')->middleware('auth');
    Route::get('/filtrardashbpard', [AdminPropertyController::class, 'FiltrarAdminDashboard'])->name('FiltrarAdminDashboard');
    Route::get('/admin/usuarios', [AdminController::class, 'showUsers'])->name('admin.usuarios');
    Route::get('/usuarios', [AdminController::class, 'showUsers'])->name('usuarios.index');
    Route::get('/admin/usuarios/{id}/edit', [AdminController::class, 'edit'])->name('usuarios.edit');
    Route::put('/admin/usuarios/{id}', [AdminController::class, 'update'])->name('usuarios.update');
    Route::get('/destroy', [AdminController::class, 'showUsers'])->name('usuarios.destroy');
    Route::delete('/usuarios/{id}', [AdminController::class, 'destroy'])->name('usuarios.destroy');
    Route::get('/property/{id}', [AdminPropertyController::class, 'show'])->name('property.show');
    Route::get('/admin/admininfovivienda', function() {return view('admininfovivienda');})->name('admin.admininfovivienda');
    Route::get('/admin/contactanos', function() {return view('admin.contactanos');})->name('admin.contactanos');
    Route::post('contactanos/store', [AdminContactanosController::class, 'store'])->name('admin.contactanos.store');



    

    
});

require __DIR__.'/auth.php';
