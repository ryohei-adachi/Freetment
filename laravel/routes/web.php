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


//認証画面に関する遷移
//Auth::routes(['verify' => true]);

//ユーザ
Route::namespace('App\Http\Controllers\User')->prefix('user')->name('user.')->group(function(){

    //ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => true,
        'verify' => true]
    );


    //ログイン認証後
    Route::middleware('auth:user')->group(function () {

        //一般ユーザのダッシュボードに遷移
        Route::get('home', 'HomeController@index');

        //稼働報告情報画面に遷移
        Route::get('report','HomeController@showReport')->name('report');
        Route::post('report', 'HomeController@postReport')->name('report');
        //稼働報告入力内容確認画面
        Route::post('confirm', 'HomeController@confirm')->name('confirm');
        Route::get('confirm', 'HomeController@showReport');
    });
});

//管理者
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){

    //ログイン認証関連  
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => true
        ]);

    //ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        //管理ユーザのダッシュボードに遷移
        Route::get('home', 'HomeController@index');
        
        //ドライバー稼働検索画面に遷移
        Route::get('driver-operation', 'HomeController@showDriverOperation')->name('driver-operation');
        Route::post('driver-operation', 'HomeController@searchDriverOperation')->name('driver-operation');
        Route::get('driver-operation-user', 'HomeController@showDriverOperation');
        Route::post('driver-operation-user', 'HomeController@showDriverOperationUser')->name('driver-operation-user');
    });
});

/* 「/」でアクセスした場合が、loginページにリダイレクト**/
Route::redirect('/','/user/login');

//一般ユーザのダッシュボードに遷移
//Route::get('/user/home', 'App\Http\Controllers\GeneralUserController@index')->middleware('auth:user');
//Route::get('/admin/home', 'App\Http\Controllers\AdminController@index')->middleware('auth:admin');

//稼働報告情報画面に遷移
//Route::get('/report', 'App\Http\Controllers\@showReport')->name('report')->middleware('auth:admin');
//Route::post('/report', 'App\Http\Controllers\GeneralUserController@postReport');

//管理者用のダッシュボードに遷移
//Route::get('/admin/home', 'App\Http\Controllers\AdminController@index');
    
//ドライバー稼働検索画面に遷移
//Route::get('/driver-operation', 'App\Http\Controllers\AdminController@showDriverOperation');
//Route::post('/driver-operation', 'App\Http\Controllers\AdminController@searchDriverOperation');

//Route::get('/driver-operation/{user_id}', 'App\Http\Controllers\AdminController@showDriverOperationUser');