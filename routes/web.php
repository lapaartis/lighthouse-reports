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

    // Projects
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', \App\Http\Livewire\Projects\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Projects\Create::class)->name('create');
        Route::get('/{project}', \App\Http\Livewire\Projects\Show::class)->name('show');
        Route::get('/{project}/edit', \App\Http\Livewire\Projects\Edit::class)->name('edit');

        // Project Audits
        Route::prefix('/{project}/audits')->name('audits.')->group(function () {
            Route::get('/create', \App\Http\Livewire\Audits\Create::class)->name('create');
            Route::get('/{audit}', \App\Http\Livewire\Audits\Show::class)->name('show');
            Route::get('/{audit}/edit', \App\Http\Livewire\Audits\Edit::class)->name('edit');
        });
    });

    Route::get('audits', \App\Http\Livewire\Audits\Index::class)->name('audits.index');
});
