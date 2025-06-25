<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OngkirController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes untuk aplikasi, termasuk halaman statis, otentikasi, dan resource.
|
*/

// Route default untuk redirect ke halaman welcome
Route::get('/', function () {
    return redirect('/welcome');
});

// Static routes untuk halaman umum
Route::view('/welcome', 'welcome');
Route::view('/login', 'login');
Route::view('/admin', 'admin');
Route::view('/landing', 'landing');
Route::view('/checkout', 'checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::view('/sukses', 'sukses');
Route::view('/profil', 'profil');
Route::view('/nouser', 'nouser');
Route::view('/notif', 'notif');









    Route::view('/produk', 'produk');
    Route::view('/order', 'order');
    Route::view('/Pelanggan', 'Pelanggan');
    Route::view('/Laporan', 'Laporan');
    Route::view('/Relasi', 'Relasi');

    Route::view('/MNpenjualan', view: 'MNpenjualan');
    Route::get('/MNproduk', [ProductController::class, 'index'])->name('MNproduk');
    Route::delete('/MNproduk/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::view('/pengguna', view: 'pengguna');
    Route::view('/tentang', 'tentang');





Route::view('/home', 'landing')->name('home');






// Route yang membutuhkan otentikasi
Route::get('/landing', [AdminController::class, 'index'])->name('landing');

Route::middleware(['auth'])->group(function () {

    Route::get('/user', [UserController::class, 'index'])->name('user');
    
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});


// Route resource untuk TaskController
Route::resource('task', TaskController::class);

// Rute otentikasi
Auth::routes();

// Route untuk Daftar
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');

Route::post('/MNproduk', [ProductController::class, 'store'])->name('MNproduk.store');

Route::get('/listbarang', [CartController::class, 'index'])->name('listbarang');
Route::post('/listbarang', [CartController::class, 'store'])->name('listbarang.store');


Route::get('/ongkir', [OngkirController::class, 'index'])->name('ongkir');
Route::post('/ongkir', [OngkirController::class, 'store'])->name('ongkir.store');
