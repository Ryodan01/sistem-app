<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendudukController;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/edit/profile','editprofile')->name('edit.profile');
    Route::post('/store/profile','storeprofile')->name('store.profile');
    
    Route::get('/change/change','changepassword')->name('change.password');
    Route::post('/update/change','updatepassword')->name('update.password');

    Route::get('/user_admin','useradmin')->name('user.admin');
});

Route::get('penduduk/user', [PendudukController::class, 'user_penduduk'])->name('penduduk.user');
Route::get('penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
Route::post('penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
Route::patch('penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::get('penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
Route::post('/penduduk/search', 'PendudukController@search');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
