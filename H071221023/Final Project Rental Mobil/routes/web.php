<?php

use App\Http\Controllers\ForgetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TransactionController;

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


//User View
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/aboutus', [AboutUsController::class, 'index']);
Route::get('/katalog', [ArmadaController::class, 'index'])->name('katalog.index');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('hal-testi');

//login account
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.cek');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//forget password
Route::get('/forget', [ForgetController::class, 'index'])->name('forget');
Route::post('/forget', [ForgetController::class, 're_pass'])->name('re-pass');
Route::get('/reset-password/{token}', [ForgetController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgetController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//sign up account
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store'])->name('sign.store');

//transaksi
Route::get('/checkout/{id}', [TransactionController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [TransactionController::class, 'checkout_store'])->name('checkout.store');
Route::get('/payment', [TransactionController::class, 'payment'])->name('payment');
Route::put('/payment', [TransactionController::class, 'payment_store'])->name('payment.store');
Route::post('/print_payment/{id1}', [TransactionController::class, 'print_payment'])->name('payment.print');

//user profile
Route::get('/profile/{id1}/{id2}', [ProfileController::class, 'profile'])->name('user-profile');
Route::get('/transaksi/{id1}/{id2}', [ProfileController::class, 'transaksi'])->name('user-transaksi');
Route::get('/invoice/{id1}/{id2}', [ProfileController::class, 'invoice'])->name('user-invoice');
Route::post('/print_invoice/{id}', [ProfileController::class, 'print_invoice'])->name('invoice.print');

//testimoni by user
Route::get('/add-testimoni', [TestimoniController::class, 'testi_user'])->name('testi');
Route::post('/add-testimoni',[TestimoniController::class, 'testi_user_add'])->name('testi.user');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');


// Admin
Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => '/transaksi'], function () {
        Route::get('/', [TransactionController::class, 'index'])->name('transaksi.index');
        Route::post('/store', [TransactionController::class, 'store'])->name('transaksi.store');
        Route::get('/edit/{id}', [TransactionController::class, 'edit'])->name('transaksi.edit');
        Route::put('/update', [TransactionController::class, 'update'])->name('transaksi.update');
        Route::put('/update_admin', [TransactionController::class, 'update_admin'])->name('transaksi.admin.update');
        Route::delete('/destroy/{id1}/{id2}', [TransactionController::class, 'destroy'])->name('transaksi.destroy');
        Route::get('/transaction-detail/{id}', [TransactionController::class, 'show'])->name('transaksi.detail');
    });

    Route::group(['prefix' => '/testi'], function () {
        Route::get('/', [TestimoniController::class, 'indextestimoni'])->name('testi.index');
        Route::get('/edit/{id}', [TestimoniController::class, 'edit'])->name('testi.edit');
        Route::put('/update', [TestimoniController::class, 'update'])->name('testi.update');
        Route::delete('/destroy/{id}', [TestimoniController::class, 'destroy'])->name('testi.destroy');
    });

    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update', [UserController::class, 'update'])->name('user.update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    });

    Route::group(['prefix' => '/cars'], function () {
        Route::get('/', [ArmadaController::class, 'indexCars'])->name('cars.index');
        Route::post('/store', [ArmadaController::class, 'store'])->name('cars.store');
        Route::get('/edit/{id}', [ArmadaController::class, 'edit'])->name('cars.edit');
        Route::put('/update', [ArmadaController::class, 'update'])->name('cars.update');
        Route::delete('/destroy/{id}', [ArmadaController::class, 'destroy'])->name('cars.destroy');

    });

    Route::group(['prefix' => '/driver'], function () {
        Route::get('/', [DriverController::class, 'index'])->name('driver.index');
        Route::post('/store', [DriverController::class, 'store'])->name('driver.store');
        Route::get('/edit/{id}', [DriverController::class, 'edit'])->name('driver.edit');
        Route::put('/update', [DriverController::class, 'update'])->name('driver.update');
        Route::delete('/destroy/{id}', [DriverController::class, 'destroy'])->name('driver.destroy');

    });

});

Route::get('/setting', function () {
    return view('/admin/setting', [
        "title" => "About Us",
    ]);
});

Route::get('/berkas', function () {
    return view('/admin/berkas', [
        "title" => "Berkas",
    ]);
});
