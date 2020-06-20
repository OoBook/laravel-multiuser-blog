<?php

use GuzzleHttp\Middleware;
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
Route::get('maintenance', function(){
    return view('front.maintenance');
})->name('maintenance');

Route::prefix('admin')->group(function () {

    Route::namespace('Admin\Auth')->middleware('isLogin')->name('admin.')->group(function(){
        Route::get('/login', 'LoginController@index')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.post');
    });

    //Logout route
    Route::namespace('Admin\Auth')->middleware('isAdmin')->name('admin.')->group(function(){
        Route::get('/logout', 'LoginController@logout')->name('logout');
    });


    Route::namespace('Admin')->middleware('isAdmin')->name('admin.')->group(function () {

        //
        Route::get('/dashboard', 'MainController@index')->name('dashboard');

        // Content Names
        Route::get('/content/trash', 'ContentController@trash')->name('content.trash');
        Route::get('/content/recycle/{id}', 'ContentController@recycle')->name('content.recycle');
        Route::get('/content/remove/{id}', 'ContentController@remove')->name('content.remove');
        Route::get('/content/permanent/remove/{id}', 'ContentController@permanentRemove')->name('content.permanent.remove');
        Route::resource('/content', 'ContentController');
        Route::get('/content/change/state', 'ContentController@changeState')->name('content.change.state');

        //Category Names
        Route::get('/category', 'CategoryController@index')->name('category.index');
        Route::get('/category/change/state', 'CategoryController@changeState')->name('category.change.state');
        Route::post('/category/insert', 'CategoryController@insert')->name('category.insert');
        Route::get('/category/receive', 'CategoryController@receive')->name('category.receive'); // ajax category get data for edit 
        Route::post('/category/update', 'CategoryController@update')->name('category.update'); // ajax category get data for edit 
        Route::post('/category/remove', 'CategoryController@remove')->name('category.remove'); // ajax category get data for edit 

        //Page Names
        Route::get('/page', 'PageController@index')->name('page.index');
        Route::get('/page/change/state', 'PageController@changeState')->name('page.change.state');
        Route::get('/page/create', 'PageController@create')->name('page.create');
        Route::post('/page/create', 'PageController@store')->name('page.store');
        Route::get('/page/edit/{id}', 'PageController@edit')->name('page.edit');
        Route::post('/page/edit/{id}', 'PageController@update')->name('page.update');
        Route::get('/page/remove/{id}', 'PageController@remove')->name('page.remove');
        Route::get('/page/sort', 'PageController@sort')->name('page.sort');

        //Settings Names
        Route::get('/settings', 'SettingsController@index')->name('settings.index');
        Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

        //Settings Names
        Route::get('/settings/banner', 'SettingsController@banner')->name('settings.banner');
        Route::post('/settings/banner/update', 'SettingsController@bannerUpdate')->name('settings.banner.update');


    });

});





Route::get('/', 'Front\HomeController@index')->name('front.home');
Route::get('/pages/{slug}', 'Front\HomeController@page')->name('front.page');

Route::post('/pages/iletisim', 'Front\HomeController@postContact')->name('front.post.contact');

Route::group(['prefix' => 'article'], function () {
    Route::get('{category}/{slug}', 'Front\ArticleController@index')->name('front.article');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('{slug}', 'Front\CategoryController@index')->name('front.category');
});




