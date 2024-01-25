<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin') ->name('admin')->group(function (){
    Route::get('/', function (){
        return view('adminPages.index.home');
    });

    Route::get('index/{page}', [MainController::class, 'index']);

    Route::get('create/{page}', [MainController::class, 'create']);
    Route::post('create/store/{page}', [MainController::class, 'store']);

    Route::get('edit/{page}/{id}', [MainController::class, 'edit']);
    Route::put('update/{page}/{id}', [MainController::class, 'update'])->name('update');

    Route::delete('delete/{page}/{id}', [MainController::class,'delete']);

    Route::get('show/{page}/{id}', [MainController::class,'show']);
});

