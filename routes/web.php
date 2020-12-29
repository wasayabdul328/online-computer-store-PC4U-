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

/*
**
***admin routes
**
*/

Route::prefix('admin')->group(function(){



Route::middleware('auth:admin')->group(function(){

//dashboard
Route::get('/dashboard',"DashboardController@getDashboard");
//products
Route::resource("/products","ProductController");//Add,Update,Delete routes for products
//Orders
Route::get('/orders','OrderController@index');
Route::get('/confirm/{id}','OrderController@confirm')->name('orders.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('orders.pending');
Route::get('/details/{id}','OrderController@show')->name('orders.show');
//Users
Route::resource('/users','UsersController');
Route::get('/ban/{id}','UsersController@Ban')->name('user.ban');
Route::get('/unban/{id}','UsersController@UnBan')->name('user.unban');
//Feedbacks
Route::get('/feedbacks','UserFeedbacksController@index');
//Supplier
Route::get('/supplier','SupplierController@index');
//logout
Route::get('/logout','AdminController@logout');


});

//login admin
Route::get("/login","AdminController@getlogin")->name('login');
Route::post("/login","AdminController@checkAdmin");

});

/*
**
***Front end routes
**
*/
Route::get('/','Front\HomeController@getHomePage');
Route::get('/graphiccard','Front\HomeController@getGraphicCardPage');
Route::get('/ssd','Front\HomeController@getSSDPage');
Route::get('/monitor','Front\HomeController@getMonitorPage');
Route::get('/completedbuild','Front\HomeController@getCompletedBuildPage');
Route::get('/ram','Front\HomeController@getRAM');
Route::get('/hdd','Front\HomeController@gethdd');
Route::get('/about','Front\HomeController@getAboutPage');
Route::get('/feedbacks and suggestions','Front\HomeController@getFeedbackPage');
Route::get('/faqs','Front\HomeController@getFaqPage');
Route::get('/policies','Front\HomeController@getPoliciesPage');
Route::post('/feedbacks and suggestions','Front\HomeController@feedbackStore');
//registration routes
Route::get('/user/signup','Front\RegistrationController@index');
Route::post('/user/signup','Front\RegistrationController@store');
//login routes
Route::get('/login','Front\SessionsController@make_account')->name('login');
Route::get('/user/login','Front\SessionsController@index');
Route::post('/user/login','Front\SessionsController@Store');
//user profile routes
Route::get('/user/profile','Front\UserProfileController@index');
Route::get('/user/order/{id}','Front\UserProfileController@show');
//logout routes
Route::get('/user/logout','Front\SessionsController@logout');
//cart routes
Route::get('/cart','Front\CartController@index');
Route::post('/cart','Front\CartController@store')->name('cart');
Route::delete('/cart/remove/{product}','Front\CartController@destroy')->name('cart.destroy');
// Route::post('/cart/savelater/{product}','Front\CartController@savelater')->name('cart.savelater');
Route::get('/checkout','Front\CheckoutController@index');
Route::get('/cod','Front\CheckoutController@cod');
Route::post('/cod','Front\CheckoutController@codStore');
//searching products routes
Route::get('/search product','Front\SearchProductController@index')->name('product.search');
