<?php
use Illuminate\Support\Facades\Route;
//Route::view('/', 'welcome');
Route::get('/', 'HomeController@myInvoices')->name('myInvoices');
Route::middleware(['auth'])->group(function(){
    Route::get('language/{lang}', function ($lang){
        if($lang == "ar"){
            app()->setlocale('ar');
            session()->put('language', 'ar');
        }else{
            app()->setlocale('ar');
            session()->put('language', 'ar');
        }
        return redirect(url()->previous());
    })->name('language');
    Route::get('/dashboard', 'HomeController@index')->name('index');
    Route::resource('invoices', 'InvoiceController');
    Route::get('my-profile', 'HomeController@myProfile')->name('my_profile');
    Route::post('my-profile', 'HomeController@update_profile')->name('update_profile');
    Route::get('print-invoice/{invoice}', 'HomeController@printInvoice')->name('printInvoice');
    Route::get('customers', 'HomeController@getCustomers')->name('getCustomers');
    Route::get('stores', 'HomeController@getStores')->name('getStores');
    Route::get('all_invoices', 'HomeController@all_invoices')->name('all_invoices');

});

Auth::routes();

