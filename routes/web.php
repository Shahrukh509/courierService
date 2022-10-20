<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();
//For all users
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('help', function () { return view('help'); })->name('help');

//For Admin /Merchant / User
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//Route::get('dashboard', function () { return view('user.dashboard'); })->name('dashboard');
Route::get('setting', function () { return view('user.setting'); })->name('setting');

                     //For Merchant Controller


Route::post('create-merchant', [App\Http\Controllers\MerchantController::class, 'create'])->name('create_merchant');

Route::Post('add-merchant',[App\Http\Controllers\MerchantController::class, 'create_merchant_from_panel'])->name('add-merchant');

Route::get('show-merchant',function(){

    return view('admin.add-merchant');})->name('show-merchant');

Route::get('view-all-merchants', [App\Http\Controllers\MerchantController::class, 'viewAllMerchant'])->name('view_all_merchant');

Route::get('edit-merchant/{id}',[App\Http\Controllers\MerchantController::class, 'edit'])->name('edit.merchant');

Route::Post('update-merchant/{id}',[App\Http\Controllers\MerchantController::class, 'update'])->name('update.merchant');


Route::get('delete-merchant/{id}',[App\Http\Controllers\MerchantController::class, 'destroy'])->name('delete.merchant');

                   //--------- end of merchants crud -----------

                  // For Parcel Controller

Route::get('view-parcels',[App\Http\Controllers\ParcelController::class, 'viewAllParcel'])->name('view_parcel');


Route::get('add-parcel', [App\Http\Controllers\ParcelController::class, 'index'])->name('add_parcel');

Route::POST('update-parcel/{id}', [App\Http\Controllers\ParcelController::class, 'update'])->name('update_parcel');

Route::get('edit-parcel/{id}', [App\Http\Controllers\ParcelController::class, 'show'])->name('edit_parcel');

Route::post('create-parcel', [App\Http\Controllers\ParcelController::class, 'create'])->name('create_parcel');

Route::get('view-all-parcel', [App\Http\Controllers\ParcelController::class, 'viewAllParcel'])->name('view_all_parcel');


Route::get('delete-parcel/{id}',[App\Http\Controllers\ParcelController::class, 'destroy'])->name('delete.parcel');

                 // Delivery Boy Parcel Status

Route::get('delivery-boy-parcel-status/{id}/{status}',[App\Http\Controllers\ParcelController::class, 'DeliveryBoyParcelStatus'])->name('dboy-status');

                          // Parcel Route setup
Route::get('parcel-route', [App\Http\Controllers\RouteSetupController::class, 'parcel_route'])->name('parcel_route');

Route::Post('add_parcel_route', [App\Http\Controllers\RouteSetupController::class, 'create'])->name('add_parcel_route');

Route::get('delete-parcel-setup/{id}',[App\Http\Controllers\RouteSetupController::class, 'destroy'])->name('delete.parcel.setup');

Route::get('tracking-parcel', function () { return view('user.tracking-parcel'); })->name('tracking_parcel');
Route::get('view-payment', function () { return view('user.view-payment'); })->name('view_payment');



                           // working with delivery boy cash collection

Route::get('add-delivery-boy', function () { return view('admin.add-delivery-boy'); })->name('add_delivery_boy');

Route::get('delivery-boy-cash-collection',[App\Http\Controllers\DeliveryBoyCashControlController::class,'index'])->name('del.boy.cash.collection');

Route::get('add_cash_collection',[App\Http\Controllers\DeliveryBoyCashControlController::class, 'getUserData'])->name('add');

Route::get('edit_cash_collection/{id}',[App\Http\Controllers\DeliveryBoyCashControlController::class, 'edit'])->name('edit');


Route::POST('save_cash_collection',[App\Http\Controllers\DeliveryBoyCashControlController::class, 'create'])->name('save');

Route::POST('update_cash_collection/{id}',[App\Http\Controllers\DeliveryBoyCashControlController::class, 'update'])->name('update');

               // end of db cash collection



                   //---------------- Adding Delivery Boy  ---------------


Route::post('adding_delivery_boy',[App\Http\Controllers\UserController::class, 'adding'])->name('add.delivery.boy');

Route::get('delivery_boy_list',[App\Http\Controllers\UserController::class, 'show'])->name('delivery.boy.list');

Route::get('edit_delivery_boy_list/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('edit.delivery.boy');

Route::Post('update_delivery_boy/{id}',[App\Http\Controllers\UserController::class, 'updating'])->name('update.dboy');

Route::get('delete-boy/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete.dboy');




                   //------- End of adding delivery boy-----------------

// ----------------------Customer Payment Info--------------

Route::get('customer_payment',[App\Http\Controllers\CustomerPaymentInfoController::class,'index'])->name('customer_pay_info');

Route::get('show_add_page', function(){

    return view('admin.add-cust-pay-info');
})->name('show_add_page');

Route::get('edit-cust-pay-info/{id}',[App\Http\Controllers\CustomerPaymentInfoController::class,'edit'])->name('edit.cust');

Route::Post('add_customer_payment',[App\Http\Controllers\CustomerPaymentInfoController::class,'create'])->name('add_customer_pay_info');

Route::Post('update_customer_payment/{id}',[App\Http\Controllers\CustomerPaymentInfoController::class,'update'])->name('update_customer_pay_info');

Route::get('delete-cust/{id}', [App\Http\Controllers\CustomerPaymentInfoController::class, 'destroy'])->name('delete.cust');
// ----------------------/Customer Payment Info--------------

Route::get('order',[App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('delivery', function () { return view('delivery-boy.delivery'); })->name('delivery');

                              

            // ------Setiing Routes Fort Merchants------------


Route::get('view-parcels-merch',[App\Http\Controllers\ParcelController::class, 'viewAllParcelMerch'])->name('view_parcel-merch');