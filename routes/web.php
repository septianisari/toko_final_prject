<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangControllers;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;
use App\Models\BarangModel;
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
    $barangs = BarangModel::all();
    return view('homepage',  ['barangs' => $barangs]);
});

Route::get('/cek', function () {
    return view('vendor.invoices.templates.default');
})->name('lihat-invoice');

// AUTHENTIKASI
Route::get('admin/login', [AuthController::class, 'login'])->name('login');
Route::post('login-action', [AuthController::class, 'loginAction'])->name('loginAction');
Route::get('logout-action', [AuthController::class, 'logoutAction'])->name('logoutAction')->middleware('auth');

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    // BARANG
    Route::get('admin/barang', [BarangControllers::class, 'index'])->name('barang');
    Route::get('barang/show', [BarangControllers::class, 'show'])->name('show');
    Route::get('barang/create', [BarangControllers::class, 'create'])->name('create');
    Route::post('barang/store', [BarangControllers::class, 'store'])->name('storeBarang');
    Route::get('barang/edit/{id}', [BarangControllers::class, 'edit'])->name('edit');
    Route::put('barang/update/{id}', [BarangControllers::class, 'update'])->name('updateBarang');
    Route::delete('barang/hapus/{id}', [BarangControllers::class, 'destroy'])->name('deleteBarang');
});
