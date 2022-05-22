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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('projects', \App\Http\Livewire\Projects\Index::class)->name('projects.index');
    Route::get('projects/create', \App\Http\Livewire\Projects\Create::class)->name('projects.create');
    Route::get('projects/{project}', \App\Http\Livewire\Projects\Show::class)->name('projects.show');
    Route::get('projects/{project}/edit', \App\Http\Livewire\Projects\Edit::class)->name('projects.edit');
});
