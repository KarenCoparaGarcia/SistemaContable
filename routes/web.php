<?php

use App\Http\Controllers\LogsController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('producto', ProductoController::class, [
    'names' => [
        'index'   => 'producto.index',
        'create'  => 'producto.create',
        'store'   => 'producto.store',
        'show'    => 'producto.show',
        'edit'    => 'producto.edit',
        'update'  => 'producto.update',
        'destroy' => 'producto.destroy',
    ]
])->middleware('auth');
Route::resource('task', TaskController::class, [
    'names' => [
        'index'   => 'task.index',
        'create'  => 'task.create',
        'store'   => 'task.store',
        'show'    => 'task.show',
        'edit'    => 'task.edit',
        'update'  => 'task.update',
        'destroy' => 'task.destroy',
    ]
])->middleware('auth');
Route::resource('logs', LogsController::class, [
    'names' => [
        'index'   => 'logs.index',
        'create'  => 'logs.create',
        'store'   => 'logs.store',
        'show'    => 'logs.show',
        'edit'    => 'logs.edit',
        'update'  => 'logs.update',
        'destroy' => 'logs.destroy',
    ]
])->middleware('auth');