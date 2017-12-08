<?php

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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt/{id}', 'FrontController@shirt')->name('shirt');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
//Route::get('/pico', 'HomeController@pico');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

//---------Ruta del total productos admin----------//
/*
Route::resource('/producto', 'ProductsController');
Route::get('/producto/agregar_producto','ProductsController@create')->name('admin');

*/
//-------------------------------------------------//
//--------Ruta de aministración--------------------//
/*
Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () 
{
    Route::get('/', function()
    {
        return view('admin.index');
    })->name('admin.index');


});

//--------------------------------------------------//
*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});

Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
//Route::get('payment_check','CheckoutController@storePayment')->name('listo.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');


Route::get('test',function(){
   $orders=App\Order::find(2);
   $items=$orders->orderItems;
dd($items);
});