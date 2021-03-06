<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\TestController;
use Egulias\EmailValidator\Warning\TLD;
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

// Route::get('/', function () {
//     logger('welcome route.');
//     return view('welcome');
// });

Route::get('memo', [
    MemoController::class, 'list'
]);

Route::post('memo', [
    MemoController::class, 'store'
]);

Route::delete('memo', [
    MemoController::class, 'delete',
]);

Route::resource('memo/edit', EditController::class);

Route::put('/', [
    MemoController::class, 'update'
]);
