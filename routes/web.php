<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
#Route::get('tarea',[TareaController::class,'index']);
#Route::get('tarea/crear',[TareaController::class,'create']);
#Route::post('tarea/crear',[TareaController::class,'store']);
Route::resource('tarea',TareaController::class); 
Route::resource('alumno',AlumnoController::class);






Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});
route::resource('tarea',TareaController::class);
#Verificar que el usuario este autenticado para ver las rutas de tareas


require __DIR__.'/auth.php';
