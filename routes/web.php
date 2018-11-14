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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/','HomeController');
Route::get('/product-type/{tid}','ProductTypeController@index');
Route::resource('/wish-list','WishlistController');
Route::resource('/favorite','FavoriteController');
Route::resource('/cart-list','CartListController');
Route::resource('/shipping','PaymentController');
Route::get('/product-detail/{pid}','ProductDetailController@index');
//Route::get('/customer-register','LoginController@cus_register');
Route::match(['get','post'],'/customer-login','LoginController@cus_login');
Route::get('/cus_logout','LoginController@logout');

Auth::routes();
Route::get('/customer/activation/{token}', 'Auth\RegisterController@customerActivation');

Route::get('/addtowishlist',function(Request $request){
    $customer_id = 1;
    $product_id=$request->id;

    $wishlist = new WishList;
    $wishlist->cid= $customer_id;
    $wishlist->save();

    $wlistPro = new WishListProduct;
    $wlistPro->wlid = $wishlist->wish_id;
    $wlistPro->pdetailid = $product_id;
    $wlistPro->date_added = now();
    $wlistPro->save();
});

Route::match(['get','post'],'/admin','LogController@login');
Auth::routes();
Route::get('/logout','LogController@logout');

Route::group(['middleware'=>['auth']],function () {
    Route::get('/admin/page', 'AdminController@index');
    Route::get('/admin/account', 'AdminController@useraccount')->name('admin.account');
    Route::get('/admin/list-product', 'AdminController@listproduct')->name('admin.list-product');
    Route::get('/admin/order-history', 'AdminController@orderhistory')->name('admin.order-history');
    Route::get('/admin/user', 'AdminController@user')->name('admin.user');

    Route::get('/admin/category', 'AdminController@listcategory');
    Route::get('/admin/brand', 'AdminController@listbrand')->name('admin.brand');
    Route::get('/admin/type', 'AdminController@listtype');
    Route::get('/admin/product', 'AdminController@product');
    Route::get('/admin/importstock', 'AdminController@importstock');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Route::get('/getbarcode', 'ProductdetailsController@getbarcode');
});
//Vannak
Route::get('/barcode','Voyager\ProductdetailsController@getbarcode')->name('product.barcode');
Route::get('/show-import','Voyager\ProductdetailsController@show_import')->name('import.show');
Route::post('/insert-product-modal','Voyager\ProductdetailsController@insert_import_product')->name('product.modal');
Route::post('/insert-productdetail','Voyager\ProductdetailsController@insert_productdetail')->name('productdetail.insert');



//END VANNAK
Route::post('/import','Voyager\ProductdetailsController@import')->name('product.import');

// KIMHAK
Route::get('/setting-profile','CustomerController@profile')->name('setting.profile');
Route::get('/setting-change-password', 'CustomerController@change_pass')->name('setting.change_pass');
Route::get('/setting-credit_card', 'CustomerController@credit_card')->name('setting.credit_card');
Route::get('/setting-purchas_history','CustomerController@purchasing_history')->name('setting.purchas_histrory');
Route::post('/update-profile','CustomerController@update_profile')->name('setting.update_profile');
Route::post('/update-pass','CustomerController@update_pass')->name('setting.update-pass');
Route::get('/cancel-order','OrderController@cancelOrder')->name('order.cancel');
Route::get('/preview-order','OrderController@previewOrder')->name('order.previewOrder');

Route::get('/cancel','OrderController@cancelProOrder')->name('order.cancel_pro_order');

// END
