<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pelayanan', [HomeController::class, 'pelayanan'])->name('pelayanan');


Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/register',[AuthController::class, 'store'])->name('authenticate.store');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware(AdminMiddleware::class);
Route::get('/admin/pelayanan',[AdminController::class, 'pelayanan'])->name('admin.pelayanan')->middleware(AdminMiddleware::class);
Route::get('/admin/pelayanan/create',[PelayananController::class, 'create'])->name('admin.pelayanan.create')->middleware(AdminMiddleware::class);
Route::post('/admin/pelayanan/create',[PelayananController::class, 'store'])->name('admin.pelayanan.store')->middleware(AdminMiddleware::class);
Route::get('/admin/pelayanan/edit/{id}',[PelayananController::class, 'edit'])->name('admin.pelayanan.edit')->middleware(AdminMiddleware::class);
Route::post('/admin/pelayanan/edit/{id}',[PelayananController::class, 'update'])->name('admin.pelayanan.update')->middleware(AdminMiddleware::class);
Route::get('/admin/pelayanan/delete/{id}',[PelayananController::class, 'delete'])->name('admin.pelayanan.delete')->middleware(AdminMiddleware::class);
Route::get('/admin/riwayat',[AdminController::class, 'riwayat'])->name('admin.riwayat')->middleware(AdminMiddleware::class);
Route::get('/admin/riwayat/{id}',[AdminController::class, 'riwayatShow'])->name('admin.riwayat.show')->middleware(AdminMiddleware::class);

Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('user')->middleware('auth');
Route::get('/dashboard/pelayanan',[HomeController::class, 'dashboardPelayanan'])->name('user.pelayanan')->middleware('auth');
Route::post('/dashboard/pelayanan/create',[TransaksiController::class, 'store'])->name('user.pelayanan.store')->middleware('auth');
Route::get('/dashboard/riwayat',[HomeController::class, 'dashboardRiwayat'])->name('user.riwayat')->middleware('auth');
Route::get('/dashboard/riwayat/{id}',[HomeController::class, 'dashboardRiwayatShow'])->name('user.riwayat.show')->middleware('auth');