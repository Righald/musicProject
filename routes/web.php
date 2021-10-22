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

Route::get('/', 'ActivityController@index')->name('index');

Route::get('estudioMenu', 'ActivityController@estudioMenu')->name('estudioMenu');
Route::get('juegosMenu', 'ActivityController@juegosMenu')->name('juegosMenu');

Route::get('invaders', 'GameController@invaders')->name('invaders');
Route::get('memorama', 'GameController@memorama')->name('memorama');
Route::get('quiz', 'GameController@quizz')->name('quizz');
route::post('score', 'GameController@score')->name('inject.score');

Route::get('estudio/{id}', 'ActivityController@estudio')->name('estudio');

Route::get('scoreTable', 'GameController@scoreTable')->name('score.table');

Route::get('tutorial/{id}', 'ActivityController@tutorial')->name('tutorial');

Route::get('dashboard', 'GameController@dashboard')->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
