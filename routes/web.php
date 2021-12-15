<?php

use App\Http\Controllers\ProductoController;
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
]);