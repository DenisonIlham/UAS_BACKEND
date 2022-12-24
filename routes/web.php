<?php

use App\Http\Controllers\Admin33Controller;
use App\Http\Controllers\DetailData33Controller;
use App\Http\Controllers\Agama33Controller;
use App\Http\Controllers\Auth\Login33Controller;
use App\Http\Controllers\Auth\Register33Controller;
use App\Http\Controllers\User33Controller;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect('/admin33');
});
Route::get('/login33', [Login33Controller::class, 'showLoginForm'])->name('login');
Route::post('/login33', [Login33Controller::class, 'login']);
Route::get('/register33', [Register33Controller::class, 'showRegistrationForm'])->name('register');
Route::post('/register33', [Register33Controller::class, 'register']);
Route::get('/logout33', [Login33Controller::class, 'logout'])->name('logout');

Auth::routes(['login' => false, 'register' => false]);
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/admin33', function () {
        return redirect('/admin33/dashboard33');
    });
    Route::get('/admin33/dashboard33', [Admin33Controller::class, 'index33']);
    Route::post('/admin33/dashboard33/update-foto-profil33', [Admin33Controller::class, 'update_foto33']);
    Route::get('/admin33/approve33/{id}', [User33Controller::class, 'approve33']);
    Route::get('/admin33/data-agama33', [Agama33Controller::class, 'index33']);
    Route::post('/admin33/data-agama33/create33', [Agama33Controller::class, 'create33']);
    Route::get('/admin33/data-agama33/edit33/{id}', [Agama33Controller::class, 'edit33']);
    Route::post('/admin33/data-agama33/update33', [Agama33Controller::class, 'update33']);
    Route::get('/admin33/data-agama33/delete33/{id}', [Agama33Controller::class, 'delete33']);
    Route::get('/admin33/dashboard33/detail33/{id}', [DetailData33Controller::class, 'index33']);
});
Route::middleware('auth', 'isUser')->group(function () {
    Route::get('/dashboard33', [User33Controller::class, 'index33'])->name('home');
    Route::get('/dashboard33/edit-data33', [User33Controller::class, 'edit33']);
    Route::get('/dashboard33/ganti-password33', [User33Controller::class, 'gantipass33']);
    Route::post('/dashboard33/update-password33', [User33Controller::class, 'updatepass33']);
    Route::post('/dashboard33/update-data33', [User33Controller::class, 'update33']);
    Route::post('/dashboard33/update-foto-profil33', [Admin33Controller::class, 'update_foto33']);
});