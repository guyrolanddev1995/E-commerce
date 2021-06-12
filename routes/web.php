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


require 'admin.php';

Route::get('/', 'Site\HomeController@index')->name('site.home');
Route::get('/home', 'Site\HomeController@index')->name('site.home');
Route::get('/brands/{brand}/products', 'Site\BrandController@show')->name('site.brands.show');
Route::get('/category/{category}', 'Site\CategoryController@show')->name('site.category.show');
Route::get('/products/{slug}', 'Site\ProductDetailController@show')->name('product.details');
Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');

Route::get('/cart', 'Site\CartController@index')->name('checkout.cart');
Route::patch('/cart/{productId}/update', 'Site\CartController@updateCart')->name('checkout.cart.update');
Route::delete('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');

Route::get('/cart/all', 'Site\CartController@getCart');
Route::get('/cart/get-cart-count', 'Site\CartController@getCartCount');

Route::group(['middleware' => ['auth']], function() {
   Route::get('checkout', 'Site\CheckoutController@create')->name('check-out');
   Route::post('checkout/store', 'Site\CheckoutController@store')->name('check-out.store');
   Route::view('checkout/success', 'site.pages.congratulation')->name('check-out.success');
   Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});


Auth::routes();
