<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ResigterController;

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
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/register', [ResigterController::class, 'index'], ['name' => 'register']);
