<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ModelcController;
/*
|--------------------------------------------------------------------------
| cotxes Routes
|--------------------------------------------------------------------------
|
| Here is where you can register cotxes routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "cotxes" middleware group. Now create something great!
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
Route::resource('modelcs', ModelcController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/modelcs/create', [ModelcController::class, 'create'])->name('modelcs.create');
    Route::post('/modelcs', [ModelcController::class, 'store'])->name('modelcs.store');
    Route::get('/modelcs/{modelc}/edit', [ModelcController::class, 'edit'])->name('modelcs.edit');
    Route::put('/modelcs/{modelc}', [ModelcController::class, 'update'])->name('modelcs.update');
    Route::delete('/modelcs/{modelc}', [ModelcController::class, 'destroy'])->name('modelcs.destroy'); 

    //En cotxes solo funciona el create, no el resto
    Route::get('/cotxes/create', [CarController::class, 'create'])->name('cotxes.create');
    Route::post('/cotxes', [CarController::class, 'store'])->name('cotxes.store');
    Route::get('/cotxes/{cotxe}/edit', [CarController::class, 'edit'])->name('cotxes.edit');
    Route::put('/cotxes/{cotxe}', [CarController::class, 'update'])->name('cotxes.update');
    Route::delete('/cotxes/{cotxe}', [CarController::class, 'destroy'])->name('cotxes.destroy');
});



require __DIR__.'/auth.php';


