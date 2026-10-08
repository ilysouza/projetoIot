<?php

use App\Livewire\Pages\Ambiente\AmbienteCreate;
use App\Livewire\Pages\Ambiente\AmbienteEdit;
use App\Livewire\Pages\Ambiente\AmbienteIndex;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Registro\RegistroCreate;
use App\Livewire\Pages\Registro\RegistroEdit;
use App\Livewire\Pages\Registro\RegistroIndex;
use App\Livewire\Pages\Sensor\SensorCreate;
use App\Livewire\Pages\Sensor\SensorEdit;
use App\Livewire\Pages\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', Dashboard::class)->name('dashboard');

Route::get('ambientes', AmbienteIndex::class)->name('ambiente.index');
Route::get('criar-ambiente', AmbienteCreate::class)->name('ambiente.create');
Route::get('editar-ambiente/{id}', AmbienteEdit::class)->name('ambiente.edit');

Route::get('sensores', SensorIndex::class)->name('sensor.index');
Route::get('criar-sensor', SensorCreate::class)->name('sensor.create');
Route::get('editar-sensor/{id}', SensorEdit::class)->name('sensor.edit');

Route::get('registros', RegistroIndex::class)->name('registro.index');
Route::get('criar-registro', RegistroCreate::class)->name('registro.create');
Route::get('editar-registro/{id}', RegistroEdit::class)->name('registro.edit');
