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
    return redirect('/login');
});

Auth::routes([ 'verify' => true ]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/profile', 'HomeController@showProfile')->name('viewProfile')->middleware('verified');
Route::post('/changePassword/{id}', 'HomeController@changePasswordSubmit')->middleware('verified');

//Orders
Route::get('/orders-index', 'OrderController@index')->name('ordersIndex')->middleware('verified');
Route::post('/orders-newOrder', 'OrderController@newOrder')->name('ordersNewOrder')->middleware('verified');
Route::get('/orders-newOrder-approve', 'OrderController@newOrderApprove')->name('ordersNewOrderApprove')->middleware('verified');
Route::post('/orders-newOrder-approve-submit', 'OrderController@newOrderApproveSubmit')->name('ordersNewOrderApproveSubmit')->middleware('verified');
Route::get('/orders-view/{id}', 'OrderController@view')->name('ordersView')->middleware('verified');

//Compliant
Route::post('/compliant-new/{orderID}', 'CompliantController@newCompliant')->name('newCompliant')->middleware('verified');
Route::post('/messages-new/{CompliantID}', 'CompliantController@newCompliantMessage')->name('newCompliantMessage')->middleware('verified');
/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    //Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');
    Route::get('/dashboard','HomeController@index')->name('home')->middleware('auth:admin');
    Route::get('/manageAdmin-index','ManageAdminController@index')->name('manageAdminIndex')->middleware('auth:admin');
    Route::post('/manageAdmin-addAdmin','ManageAdminController@storeAdmin')->name('manageAdminAddAdmin')->middleware('auth:admin');
    Route::get('/manageAdmin-getAdminDetails/{id}','ManageAdminController@showAdminDetails')->name('manageAdminGetAdminDetails')->middleware('auth:admin');

    //Orders 
    Route::get('/orders-index','OrderController@index')->name('adminOrdersIndex')->middleware('auth:admin');
    Route::get('/orders-view/{id}', 'OrderController@view')->name('adminOrdersView')->middleware('auth:admin');
    Route::post('/orders-approve/{id}', 'OrderController@approveOrder')->name('adminOrdersApprove')->middleware('auth:admin');
    Route::post('/orders-decline/{id}', 'OrderController@declineOrder')->name('adminOrdersDecline')->middleware('auth:admin');

    //Compliant
    Route::get('/compliants-index','CompliantController@index')->name('adminCompliantsIndex')->middleware('auth:admin');
    Route::get('/compliants-view/{slug}','CompliantController@viewCompliant')->name('adminCompliantsView')->middleware('auth:admin');
    Route::post('/messages-new/{CompliantID}', 'CompliantController@newCompliantMessage')->name('adminNewCompliantMessage')->middleware('auth:admin');
    Route::post('/compliants-assign/{slug}', 'CompliantController@assignToAdmin')->name('adminAssignCompliant')->middleware('auth:admin');
    //Put all of your admin routes here...

});

/* ----------------------- Admin Routes END -------------------------------- */
