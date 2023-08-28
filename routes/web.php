<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [
    PagesController::class,
    'index'
]);
Route::get('/about', [
    PagesController::class,
    'about'
]);

// Route::get('products', [
//     ProductsController::class,
//     'index'
// ]);

// Route::get('products/{productName}/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',// validate id la string
//     'id' => '[0-9]+'// validate id la interger
// ]); 

// Route::get('/', function () {
//     // return env('MY_NAME');

//     return view('home');
// });

// Route::get('/users', function () {
//     return 'users';
// });


// Route::get('/foods', function () {
//     return ['sushi', 'sashimi'];
// });

// Route::get('/aboutMe', function () {
//     // return response()->json([
//     //     'name' => 'sang'
//     // ]);
//     return ['name' => 'sang'];
// });
