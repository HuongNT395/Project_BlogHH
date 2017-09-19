<?php

namespace App\Http\Controllers;

use App\Category;
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
        $postDay = Post::orderBy('like','desc')->paginate(2);
        $postFilm = Post::where('category_id',6)->paginate(2);
        $postFashion = Post::where('category_id',3)->paginate(2);
        $categories = CategoryController::getCategory();
        $users = UserController::getUser();
        return view('post.list', ["categories" => $categories, "users" => $users, "postsDay" => $postDay, "postsFilm" => $postFilm, "postsFashion" => $postFashion]);
    }

    public function getPostLogged() {
        $postDay = Post::orderBy('like','desc')->paginate(2);
        $postFilm = Post::where('category_id',6)->paginate(2);
        $postFashion = Post::where('category_id',3)->paginate(2);
        $categories = CategoryController::getCategory();
        $users = UserController::getUser();
        return view('post.logged.list', ["categories" => $categories, "users" => $users, "postsDay" => $postDay, "postsFilm" => $postFilm, "postsFashion" => $postFashion]);
    }

    //xem post theo category
//    public function getCategoryPost($category) {
//        $categories = CategoryController::getCategory();
//        $users = UserController::getUser();
//        $posts = Post::where('category_id', $category->id)->paginate(2);
//        return view('post.list', ["categories" => $categories, "users" => $users, "posts" => $posts]);
//    }

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

    //like a post
    public function setLikeAPost(Request $request, $id) {
        $post = Post::find($id);
        $post->like++;
        $post->save();
        return redirect(route('post.list'));
    }

    //add a post
    public function addFormPost() {
        $categories = Category::all();
        return view('post.logged.addPost', ["categories" => $categories]);
    }

    //added apost
    public function addedPost(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->summary = $request->input('summary');
        $post->content = $request->input('post_content');
        $post->category_id = $request->input('category_id');
        $post->user_id = $request->input('user_id');
        $post->image = $request->input('image');
        echo $request->input('image');
        echo $request->hasFile('image');
        if($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAS('public/images/post',$fileName);
            $post->image = $fileName;
        } else {
            return "Not file selected";
        }
        $post->save();
        return redirect(route('post.list'));
    }
}
