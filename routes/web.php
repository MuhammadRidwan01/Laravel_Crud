<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminSiswaController;
use App\Http\Controllers\AdminJurusanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/siswa', SiswaController::class);
    
});

// Rute hanya admin
// buat ruta yang hanya bisa di akses oleh user yang memiliki valeu true pada field is_admin di table users


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
  Route::resource('/admin/jurusan/', AdminJurusanController::class)->names([
    'index' => 'admin.jurusan.index',
    'create' => 'admin.jurusan.create',
    'store' => 'admin.jurusan.store',
    'show' => 'admin.jurusan.show',
    'edit' => 'admin.jurusan.edit',
    'update' => 'admin.jurusan.update',
    'destroy' => 'admin.jurusan.destroy',
]);
    Route::resource('/admin/siswa', AdminSiswaController::class)->names([
        'index' => 'admin.siswa.index',
        'create' => 'admin.siswa.create',
        'store' => 'admin.siswa.store',
        'show' => 'admin.siswa.show',
        'edit' => 'admin.siswa.edit',
        'update' => 'admin.siswa.update',
        'destroy' => 'admin.siswa.destroy',
    ]);
});

require __DIR__.'/auth.php';
