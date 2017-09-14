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


Route::group(['prefix' => 'post'], function() {
    Route::get('list', "PostController@getPost");
    Route::get('like', "PostController@getPostLike")->name('post.like');
    Route::get('fashion', "PostController@getAny1CategoryPost")->name('post.fashion');
    Route::get('film', "PostController@getAnyCategoryPost")->name('post.film');
});


    Route::group(['prefix' => 'post'], function() {
        Route::get('list', "PostController@getPost");
    });

    Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function () {
        //admin/theloai/sua
        Route::group(['prefix' => 'theloai'], function () {
            Route::get('danhsach', 'TheLoaiController@getDanhSach');
            Route::get('sua/{id}', 'TheLoaiController@getSua');
            Route::post('sua/{id}', 'TheLoaiController@postSua');
            Route::get('them', 'TheLoaiController@getThem');
            Route::post('them', 'TheLoaiController@postThem');
            Route::get('xoa/{id}', 'TheLoaiController@getXoa');
            Route::post('xoa/{id}', 'TheLoaiController@postXoa');
        });

        //admin/qltintuc/sua
        Route::group(['prefix' => 'qltintuc'], function () {
            Route::get('danhsach', 'QLTinTucController@getDanhSach');
            Route::get('xoa/{id}', 'QLTinTucController@getXoa');
            Route::post('xoa/{id}', 'QLTinTucController@postXoa');
        });

        //admin/qluser/sua
        Route::group(['prefix' => 'qluser'], function () {
            Route::get('danhsach', 'QLUserController@getDanhSach');
            Route::get('xoa/{id}', 'QLUserController@getXoa');
            Route::post('xoa/{id}', 'QLUserController@postXoa');
        });
    });

        //    Route::group(['prefix'=>'qluser'],function (){
        //        //user/personal/sua
        //        Route::group(['prefix'=>'personal'],function () {
        //            Route::get('sua','PersonalController@getSua');
        //            Route::get('them','PersonalController@getThem');
        //        });

            //user/post/them
            Route::group(['prefix'=>'post'],function () {
                Route::get('danhsach','PostController@getDanhSach');
                Route::get('sua','PostController@getSua');
                Route::get('them','PostController@getThem');
            });


//Login
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
