<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\YatzyController;
use App\Http\Controllers\DiceController;
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
    return view('start', [
        'title' => "Home | DiceLaVerdad"
    ]);
});

Route::get('/game21', function () {
    return view('game21', [
        'title' => "Game 21 | DiceLaVerdad"
    ]);
});

Route::get('/dice', [DiceController::class, 'roll']);
Route::post('/dice', [DiceController::class, 'roll']);

Route::get('/yatzy', [YatzyController::class, 'start']);
Route::post('/yatzy', [YatzyController::class, 'play']);

// Added for mos example code
// Route::get('/hello-world', function () {
//     echo "Hello World";
// });
//
// Route::get('/hello', [HelloWorldController::class, 'hello']);
// Route::get('/hello/{message}', [HelloWorldController::class, 'hello']);
