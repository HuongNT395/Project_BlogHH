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
    Route::get('like', "PostController@getPostByLike")->name('post.like');
    Route::get('category', "PostController@getPostByCategory")->name('post.category');
    Route::get('time', "PostController@getPostTime")->name('post.time');
    Route::get('liked/{id}', 'PostController@setLikeAPostList')->name('post.actionLikeList');
    Route::get('detail/{id}', "PostController@displayAPost")->name('post.detail');
});

//đã đăng nhập
Route::group(['prefix' => 'post/logged', 'middleware' => 'auth'], function () {
    Route::get('list', "LoggedPostController@getPostLogged")->name('post.logged.list');
    Route::get('addPost', "LoggedPostController@addFormPost")->name('post.logged.addForm');
    Route::post('addPost', "LoggedPostController@addedPost")->name('post.logged.added');
    Route::get('like', "LoggedPostController@getPostByLike")->name('post.logged.like');
    Route::get('category', "LoggedPostController@getPostByCategory")->name('post.logged.category');
    Route::get('time', "LoggedPostController@getPostTime")->name('post.logged.time');
    Route::get('detail/{id}', "LoggedPostController@displayAPost")->name('post.logged.detail');

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
            Route::get('danhsach', 'PostUserController@getDanhSach')->name('user.post.list');
            Route::get('them', 'PostUserController@getThem');
            Route::post('them', 'PostUserController@postThem');
            Route::get('sua/{id}', 'PostUserController@getSua');
            Route::post('sua/{id}', 'PostUserController@postSua');
            Route::get('xoa/{id}', 'PostUserController@getXoa');
            Route::post('xoa/{id}', 'PostUserController@postXoa')->name('user.post.delete');
        });

    });


    //Login
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');

    //fb
    Route::get('auth/{provider}', 'Auth\SocialController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialController@handleProviderCallback');

