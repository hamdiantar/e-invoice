<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'AuthController@login')->middleware('email_verified');
Route::post('register', 'AuthController@register');

//invoices
Route::get('invoices', 'CategoriesController@getCategories');
Route::get('invoices/{category}/courses/{perPage?}', 'CategoriesController@getCategoryWithCourses');

//courser
Route::get('courses', 'CourseController@getAllCourser');

//email verifications
Route::get('email/verification/{token}', 'EmailVerificationController@verifyEmail');
Route::post('email/verification/resend', 'EmailVerificationController@resendEmailVerification');

//reset password
Route::post('/reset-password-request', 'PasswordResetRequestController@sendPasswordResetEmail');
Route::post('/change-password', 'ChangePasswordController@passwordResetProcess');

//list all packages
Route::get('packages', 'PackageController@getPackages');

Route::post('contact_us', 'ContactUSController@store');

Route::get('courses/{course}/episodes/{user_id?}', 'CourseController@getCourseWithEpisodes');

//setting api routes
Route::get('setting', 'SettingController@index');
Route::get('socialMedia', 'SettingController@socialMedia');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::put('user/{user}', 'UserController@update');
    Route::post('user/subscribe', 'SubscribeController@subscribe');
    Route::post('user/subscribe_with_packages', 'PackageController@subscribeWithPackage');
    Route::post('user/subscribe_with_packages', 'PackageController@subscribeWithPackage');
    Route::get('user/{user}', 'UserController@getUserData');
});

Route::get('pull/notifications', 'NotificationController@pullNotifications');
