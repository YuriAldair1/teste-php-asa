<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/medicos', function () {
    return view('medicos.home');
})->name('medicos');


Route::group(['prefix' => 'medicos', 'as' => 'medicos.'], function () {
    Route::get('/', 'ControllerMedicos@home')->name('home');
    Route::get('/update/{slug}', 'ControllerMedicos@edit')->name('edit');
    Route::get('/novo', 'ControllerMedicos@novo')->name('novo');


    Route::group(['prefix' => 'especialidades', 'as' => 'especialidades.'], function () {
        Route::get('/', 'ControllerEspecialidades@home')->name('home');
        Route::get('/novo', 'ControllerEspecialidades@novo')->name('novo');
        Route::get('/update/{slug}', 'ControllerEspecialidades@edit')->name('edit');
        Route::get('/delete/{slug}', 'ControllerEspecialidades@delete')->name('delete');
    });

});




Route::group(['prefix' => 'pacientes', 'as' => 'pacientes.'], function () {
    Route::get('/', 'ControllerPacientes@home')->name('home');
    Route::get('/novo', 'ControllerPacientes@novo')->name('novo');
    Route::get('/update/{paciente}', 'ControllerPacientes@edit')->name('edit');
});
Route::group(['prefix' => 'atendimentos', 'as' => 'atendimentos.'], function () {
    Route::get('/', 'ControllerAtendimentos@home')->name('home');
    Route::get('/novo', 'ControllerAtendimentos@novo')->name('novo');
    Route::get('/update/{paciente}', 'ControllerAtendimentos@edit')->name('edit');
});

