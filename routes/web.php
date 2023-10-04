<?php

use Illuminate\Support\Facades\Auth;
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



Route::get("/admin", function () {
    return redirect()->route("login");
});

Route::get('/', 'WelcomController@index')->name('welcome');
Route::get('/event/{id}/detail', 'WelcomController@detail')->name('welcome.detail');
Route::get('/file/{file}',  'FileController@show')->name('file.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/event', 'EventController@index')->name('event');
Route::get('/event/create', 'EventController@create')->name('event.create');
Route::get('/event/{id}/edit', 'EventController@edit')->name('event.edit');
Route::delete('/event/{id}', 'EventController@destroy')->name('event.destroy');
Route::post('/event/store', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::put('/event/{id}', 'EventController@update')->name('event.update');

//event image
Route::get('/event-image', 'EventImageController@index')->name('event-image');
Route::get('/event-image/create', 'EventImageController@create')->name('event-image.create');
Route::get('/event-image/{id}/edit', 'EventImageController@edit')->name('event-image.edit');
Route::delete('/event-image/{id}', 'EventImageController@destroy')->name('event-image.destroy');
Route::post('/event-image/store', [App\Http\Controllers\EventImageController::class, 'store'])->name('event-image.store');
Route::put('/event-image/{id}', 'EventImageController@update')->name('event-image.update');

//slide
Route::get('/slide', 'SlideController@index')->name('slide');
Route::get('/slide/create', 'SlideController@create')->name('slide.create');
Route::get('/slide/{id}/edit', 'SlideController@edit')->name('slide.edit');
Route::delete('/slide/{id}', 'SlideController@destroy')->name('slide.destroy');
Route::post('/slide/store', [App\Http\Controllers\SlideController::class, 'store'])->name('slide.store');
Route::put('/slide/{id}', 'SlideController@update')->name('slide.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
