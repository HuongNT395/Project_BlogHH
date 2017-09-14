<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers;

class PostController extends Controller
{
//    public function displayAllPost() {
//        $posts = Post::all();
//        $categories = CategoryController::getCategory();
//        $users = UserController::getUser();
//        return view('post.list', ["categories" => $categories, "users" => $users, "posts" => $posts]);
//    }

    public function showAddForm() {
        return view('post.write');
    }

    public function getPost() {
        $postDay = Post::orderBy('updated_at','asc')->paginate(2);
        $postFilm = Post::where('category_id',6)->paginate(2);
        $postFashion = Post::where('category_id',3)->paginate(2);
        $categories = CategoryController::getCategory();
        $users = UserController::getUser();
        return view('post.list', ["categories" => $categories, "users" => $users, "postsDay" => $postDay, "postsFilm" => $postFilm, "postsFashion" => $postFashion]);
    }
    //xem tất cả bài viết theo số lượng like
    public function getPostLike() {
        $posts = Post::orderBy('like', 'asc')->paginate(10);
        $categories = CategoryController::getCategory();
        return view('post.like', ["posts" => $posts, "categories" => $categories]);
    }

    //xem tất cả bài viết của 1 category nào đó
    public function getAnyCategoryPost() {
        $posts = Post::where('category_id', 6)->paginate(10);
        $categories = CategoryController::getCategory();
        return view('post.film', ["posts" => $posts, "categories" => $categories]);
    }

    public function getAny1CategoryPost() {
        $posts = Post::where('category_id', 3)->paginate(10);
        $categories = CategoryController::getCategory();
        return view('post.fashion', ["posts" => $posts, "categories" => $categories]);
    }

    public function displayAPost(Request $request, $id) {
        $post = Post::find($id);
        return view('post.detail', ["post" => $post]);
    }
}
