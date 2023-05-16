<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdminCalonPemilihController;
use App\Http\Controllers\CalonPemilihController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RelawanController;
use App\Models\Kecamatan;
use App\Models\Provinsi;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('calonpemilih', CalonPemilihController::class);
Route::resource('admin/dashboard', DashboardAdminController::class)->middleware(['adminauth']);
Route::resource('admin/relawan', RelawanController::class)->middleware(['adminauth']);
Route::resource('admin/pemilih', AdminCalonPemilihController::class)->middleware(['adminauth']);
Route::resource('admin/provinsi', ProvinsiController::class)->middleware(['adminauth']);
Route::resource('admin/kota', KotaController::class)->middleware(['adminauth']);
Route::resource('admin/kecamatan', KecamatanController::class)->middleware(['adminauth']);
Route::resource('admin/kelurahan', KelurahanController::class)->middleware(['adminauth']);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
    });
});
