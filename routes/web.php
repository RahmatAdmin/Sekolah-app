<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dash', [DashboardController::class, 'show'])->name('dashboard.show');
Route::get('/set', [DashboardController::class, 'set'])->name('dashboard.set');


Route::get('/data-siswa', [SiswaController::class, 'store']);
// routes/web.php

use App\Http\Controllers\DataController;

Route::post('/data', [DataController::class, 'store'])->name('data.store');
Route::get('/pegawai', [DashboardController::class, 'pegawai']);


require __DIR__.'/auth.php';
