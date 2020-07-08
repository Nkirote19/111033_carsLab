<?php

use Illuminate\Support\Facades\Route;
use App\Car;
use App\Review;

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
    return view('cars.addrecordsForm');
})->name('add_car');

Route::get('add_review', function () {
    return view('cars.addreview');
})->name('add_review');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/car','CarController@allcars');
Route::get('/car/{id}','CarController@particularcar');
Route::post('/register_car','CarController@newcar');
Route::get ( 'all_cars', function () {
    $data = Car::all ();
    return view ( 'cars/allcars' )->withData ( $data );
} )->name('all_cars');

Route::post('/saveReview','ReviewsController@saveReview');

Route::get('/getMake','ReviewsController@getMake');

Route::get ( 'all_reviews', function () {
    $data = Review::all ();
    return view ( 'cars/allreviews' )->withData ( $data );
} )->name('all_reviews');