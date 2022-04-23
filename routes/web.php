<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
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
//     return view('home');
// });

// Route::get('/about/{name}', function ($name) {
//     return view('about', compact('name'));
// });

Route::get('/directives', function () {
    return view('directives');
});

Route::get('/', [DemoController::class, 'index']);
Route::get('/about/{name}', '\App\Http\Controllers\DemoController@about');
Route::get('/register', [RegistrationController::class, 'registrationForm']);
Route::post('/register', [RegistrationController::class, 'submitForm']);

Route::get('/customers', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});

Route::controller(ProductController::class)->name('products.')->prefix('products')->group(function () {
    Route::get('/create',  'create')->name('create');
    Route::post('/',  'store')->name('store');
    Route::get('/', 'view')->name('view');
    Route::get('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
});
