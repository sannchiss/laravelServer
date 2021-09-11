<?php

use Illuminate\Support\Facades\Route;
use App\Models\comunas;

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
    return view('welcome', [

        'comunas' => comunas::all()

    ]);
});
 

Route::get('/search', function () {
    return view('partials.comunas', [

        'comunas' => comunas::where('PUEBLO', 'LIKE', '%'.request('q').'%')->get()

    ]);
});