<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    // 'prefix' => 'auth'

], function ($router) {

    Route::post('/register', 'AuthController@register')->name('api.register');
    Route::post('/login', 'AuthController@login')->name('api.login');
    Route::post('/logout', 'AuthController@logout')->name('api.logout');
    Route::post('/refresh', 'AuthController@refresh');
    //Route::post('/profile', 'AuthController@me')->name('api.profile');

});

// Route::get('getname')function(){
    
// }
//Route::get('/api/staff', 'StaffController@index')->name('staff');
Route::post('/staff/create', 'StaffController@store')->name('api.staff.store');
Route::post('/staff/{st}', 'StaffController@update')->name('api.staff.update');
Route::delete('/staff/delete/{st}', 'StaffController@destroy')->name('api.staff.destroy');
Route::get('/api/supplier', 'SupplierController@index')->name('supplier');
Route::post('/supplier/create', 'SupplierController@store')->name('api.supplier.store');
Route::post('/supplier/{s}', 'SupplierController@update')->name('api.supplier.update');
Route::delete('/supplier/delete/{s}', 'SupplierController@destroy')->name('api.supplier.destroy');

//Route::get('/api/kasir', 'CashierController@index')->name('kasir');
Route::post('/kasir/create', 'CashierController@store')->name('api.kasir.store');
Route::post('/kasir/{c}', 'CashierController@update')->name('api.kasir.update');
Route::delete('/kasir/delete/{c}', 'CashierController@destroy')->name('api.kasir.destroy');

//Route::get('/api/member', 'MemberController@index')->name('member');
Route::post('/member/create', 'MemberController@store')->name('api.member.store');
Route::post('/member/{m}', 'MemberController@update')->name('api.member.update');
Route::delete('/member/delete/{m}', 'MemberController@destroy')->name('api.member.destroy');

//Route::get('/api/kategori', 'KategoriController@index')->name('kategori');
Route::post('/kategori/create', 'KategoriController@store')->name('api.kategori.store');
Route::post('/kategori/{k}', 'KategoriController@update')->name('api.kategori.update');
Route::delete('/kategori/delete/{k}', 'KategoriController@destroy')->name('api.kategori.destroy');

//Route::get('/api/pembelian', 'PembelianController@index')->name('pembelian');
Route::post('/pembelian/create', 'PembelianController@store')->name('api.pembelian.store');
Route::post('/pembelian/{b}', 'PembelianController@update')->name('api.pembelian.update');
Route::delete('/pembelian/delete/{b}', 'PembelianController@destroy')->name('api.pembelian.destroy');

//Route::get('/api/pengeluaran', 'PengeluaranController@index')->name('pengeluaran');
Route::post('/pengeluaran/create', 'PengeluaranController@store')->name('api.pengeluaran.store');
Route::post('/pengeluaran/{l}', 'PengeluaranController@update')->name('api.pengeluaran.update');
Route::delete('/pengeluaran/delete/{l}', 'PengeluaranController@destroy')->name('api.pengeluaran.destroy');

//Route::get('/api/produk', 'ProdukController@index')->name('produk');
Route::post('/produk/create', 'ProdukController@store')->name('api.produk.store');
Route::post('/produk/{pr}', 'ProdukController@update')->name('api.produk.update');
Route::delete('/produk/delete/{pr}', 'ProdukController@destroy')->name('api.produk.destroy');

//Route::get('/api/transaksi', 'TransaksiController@index')->name('transaksi');
Route::post('/transaksi/create', 'TransaksiController@store')->name('api.transaksi.store');
Route::post('/transaksi/{t}', 'TransaksiController@update')->name('api.transaksi.update');
Route::delete('/transaksi/delete/{t}', 'TransaksiController@destroy')->name('api.transaksi.destroy');


// Route::post('/login', 'AuthController@login')->name('api.login');
// Route::post('/register', 'AuthController@register')->name('api.register');
