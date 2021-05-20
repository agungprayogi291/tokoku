<?php
use App\Http\Controllers\{
	LoginController,
	homeController,
	CategoryController,
	ProdukController,
	CheckoutController,
	DashboardController
};
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
Route::get('/',[homeController::class,'index']);
Route::get('/home',[homeController::class,'index']);
Route::get('/page-login',[LoginController::class,'index']);
Route::get('/page-logout',[LoginController::class,'logout'])->name('logout');
Route::get('/page-register',[LoginController::class,'register']);
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/page-register/proses',[LoginController::class,'create'])->name('registrasi');
Route::get('/buat/{id}',[LoginController::class,'edit']);

Route::get('/category/{id}/show',[CategoryController::class,'show']);
Route::resource('checkout',CheckoutController::class);

Route::get('/produk/search',[homeController::class,'search']);

	Route::middleware(['auth','ceklevel:admin'])->prefix('dashboard')->group(function(){
		Route::get('produk',[ProdukController::class,'index']);
		Route::get('delete/{id}',[ProdukController::class,'destroy']);
		Route::get('produk/create',[ProdukController::class,'create']);
		Route::get('update/{produk:id}',[ProdukController::class,'edit']);
		Route::post('produk/post',[ProdukController::class,'store']);
		Route::patch('produk/update',[ProdukController::class,'update']);
		Route::get('produk/{id}',[ProdukController::class,'destroy']);
	});