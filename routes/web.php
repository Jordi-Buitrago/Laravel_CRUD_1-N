<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ModelcController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



/* Route::get('cotxes/{id}', function ($id) {
    return App\Models\Cotxe::find($id);
}); */
Route::resource('cotxes', CarController::class);
Route::resource('models', ModelcController::class);

Route::middleware(['auth'])->group(function () {
    Route::delete('cotxes/{id}', [CarController::class, 'destroy']);
    Route::get('cotxes/{id}/edit', [CarController::class, 'edit']);
    Route::put('cotxes/{id}', [CarController::class, 'update']);
    Route::delete('models/{id}', [ModelcController::class, 'destroy']);
    Route::get('models/{id}/edit', [ModelcController::class, 'edit']);
    Route::put('models/{id}', [ModelcController::class, 'update']);
});
require __DIR__.'/auth.php';


