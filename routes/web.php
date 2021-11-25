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

/*MENU ROUTES*/
Route::get('/', 'ActivityController@index')->name('index');

Route::get('estudioMenu', 'ActivityController@estudioMenu')->name('estudioMenu');
Route::get('juegosMenu', 'ActivityController@juegosMenu')->name('juegosMenu');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('register', 'Auth\RegisterController@register')->name('register');

/*GAME&SCORE ROUTES*/
Route::get('invaders', 'GameController@invaders')->name('invaders');
Route::get('memorama', 'GameController@memorama')->name('memorama');
Route::get('quiz', 'GameController@quizz')->name('quizz');
route::post('score', 'GameController@score')->name('inject.score');
Route::get('scoreTable', 'GameController@scoreTable')->name('score.table');

/*Information ROUTES*/
Route::get('estudio/{id}', 'ActivityController@estudio')->name('estudio');
Route::get('tutorial/{id}', 'ActivityController@tutorial')->name('tutorial');

/*CARDS ROUTES*/
Route::middleware(['auth'])->group(function() {

	Route::get('delete','HomeController@deleteUser')->name('deleteUser');
	Route::get('update','HomeController@update')->name('updateUser');
	Route::put('update','HomeController@storeUpdate')->name('storeUpdateUser');
	
	Route::get('misCartas', 'CardController@index')->name('myCards');
	Route::get('randomCard', 'CardController@randomCard')->name('randomCard');
	Route::get('getCardsByTheme/{id}', 'CardController@getCardsByTheme')->name('cardsByTheme');
	Route::get('getCard/{id}', 'CardController@getCard')->name('getCardById');
	Route::post('storeCard', 'CardController@store')->name('myCards_store');
	Route::post('updateCard/{id}', 'CardController@update')->name('myCards_update');
	Route::delete('deleteCard/{id}', 'CardController@destroy')->name('myCards_delete');
	
});

/*DASHBOARD*/
Route::get('dashboard', 'GameController@dashboard')->name('dashboard');

/*USER CRUD & LOGIN*/
Auth::routes();


/*TEST*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
