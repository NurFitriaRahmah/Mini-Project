<?php

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
    return view('welcome');
});

Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/login', 'LoginController@index')->name('login');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/staff', 'StaffController@dashboard')->name('staff');

Route::get('/profile', 'AuthController@me')->name('profile');

Route::get('/owner', 'OwnerController@index')->name('owner');

Route::get('/staff/daftar', 'StaffController@index')->name('staff.daftar');

Route::get('/staff/create', 'StaffController@create')->name('staff.create');
Route::get('/staff/{st}/edit', 'StaffController@edit')->name('staff.edit');

Route::get('/kasir', 'CashierController@index')->name('cashier');
Route::get('/kasir/create', 'CashierController@create')->name('kasir.create');
Route::get('/kasir/{ca}/edit', 'CashierController@edit')->name('kasir.edit');

Route::get('/member', 'MemberController@index')->name('member');
Route::get('/member/create', 'MemberController@create')->name('member.create');
Route::get('/member/{m}/edit', 'MemberController@edit')->name('member.edit');

Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
Route::get('/kategori/{c}/edit', 'KategoriController@edit')->name('kategori.edit');

Route::get('/pembelian', 'PembelianController@index')->name('pembelian');
Route::get('/pembelian/create', 'PembelianController@create')->name('pembelian.create');
Route::get('/pembelian/{b}/edit', 'PembelianController@edit')->name('pembelian.edit');

Route::get('/pengeluaran', 'PengeluaranController@index')->name('pengeluaran');
Route::get('/pengeluaran/create', 'PengeluaranController@create')->name('pengeluaran.create');
Route::get('/pengeluaran/{l}/edit', 'PengeluaranController@edit')->name('pengeluaran.edit');

Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::get('/produk/{p}/edit', 'ProdukController@edit')->name('produk.edit');

Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/supplier/create', 'SupplierController@create')->name('supplier.create');
Route::get('/supplier/{s}/edit', 'SupplierController@edit')->name('supplier.edit');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/create', 'TransaksiController@create')->name('transaksi.create');
Route::get('/transaksi/{t}/edit', 'TransaksiController@edit')->name('transaksi.edit');
