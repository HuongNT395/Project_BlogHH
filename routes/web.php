<?php

use Illuminate\Http\Request;
use App\Post;
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
  //liên quan đến post
Route::group(['prefix' => 'post'], function() {
    Route::get('list', "PostController@getPost")->name('post.list');
    Route::get('like', "PostController@getPostLike")->name('post.like');
    Route::get('fashion', "PostController@getAny1CategoryPost")->name('post.fashion');
    Route::get('film', "PostController@getAnyCategoryPost")->name('post.film');
    Route::get('liked/{id}', 'PostController@setLikeAPost')->name('post.actionLike');
    Route::get('detail/{id}', "PostController@displayAPost")->name('post.detail');
});

    //admin
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

        //user
    Route::group(['prefix'=>'user'],function () {
        //user/information/sua
        Route::group(['prefix' => 'information'], function () {
            Route::get('danhsach', 'InformationUserController@getInformation');
            Route::get('sua', 'InformationUserController@getSuaInformation');
            Route::post('sua', 'InformationUserController@postInformation');
        });

        //user/post/sua
        Route::group(['prefix' => 'post'], function () {
            Route::get('danhsach', 'PostUserController@getDanhSach');
            Route::get('them', 'PostUserController@getThem');
            Route::post('them', 'PostUserController@postThem');
            Route::get('sua', 'PostUserController@getSua');
            Route::post('sua', 'PostUserController@postSua');
            Route::get('xoa', 'PostUserController@getXoa');
            Route::post('xoa', 'PostUserController@postXoa');
        });

    });


    //Login
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
