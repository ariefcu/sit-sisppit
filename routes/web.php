<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\CreateselectController;
use App\Http\Controllers\NamaController;

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

/*
| TEST ALUR LOGIC DI LARAVEL :
| 1. Route
| 2. CONTROLLER
| 3. VIEW
*/

/*
| di URI_1 tanpa parameter
| di controller tanpa parameter
*/
Route::get('/URI_1', [NamaController::class, 'nama_method_1'])->name('nama_route_1');

/*
| di URI_2 dengan parameter
| di controller tanpa parameter
*/
Route::get('/URI_2/{nama_parameter_2}', [NamaController::class, 'nama_method_2'])->name('nama_route_2');

/*
| di URI_3 dengan parameter dan ada sub routenya
| di controller tanpa parameter
*/
Route::get('/URI_3/{nama_parameter_3}/nama_sub_route_3', [NamaController::class, 'nama_method_3'])->name('nama_route_3');

/*
| di URI_4 dengan parameter
| di controller dengan parameter
*/
Route::get('/URI_4/{nama_parameter_4}', [NamaController::class, 'nama_method_4'])->name('nama_route_4');

/*
| di URI_5 tanpa parameter
| di controller dengan parameter
| jadinya error!!
*/
Route::get('/URI_5', [NamaController::class, 'nama_method_5'])->name('nama_route_5');

/*
| di URI_6 tanpa parameter
| di controller dengan parameter
| di view dengan parameter tanpa array
*/
Route::get('/URI_6', [NamaController::class, 'nama_method_6'])->name('nama_route_6');

/*
| di URI_7 tanpa parameter
| di controller dengan parameter
| di view dengan parameter dengan array
*/
Route::get('/URI_7', [NamaController::class, 'nama_method_7'])->name('nama_route_7');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/izins/createselect/{santri_id}',
[CreateselectController::class, 'createselect'])->name('izins.createselect');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('santris', SantriController::class);
    Route::resource('izins', IzinController::class);
    Route::resource('approvals', ApprovalController::class)->except('create');
});
