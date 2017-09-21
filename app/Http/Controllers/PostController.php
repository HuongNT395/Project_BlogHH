<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;


class PostController extends Controller
{

    public function getPostLogged() {
        $postDay = Post::orderBy('like','desc')->paginate(2);
        $postsTime = Post::where('category_id', $this->getMaxCountCategory()->id)->paginate(2);
        $postsCategory = Post::orderBy('like', 'desc')->paginate(2);
        $categories = Category::all();
        $users = User::all();
        return view('post.logged.list', ["categories" => $categories, "users" => $users, "postsDay" => $postDay, "postsTime" => $postsTime, "postsCategory" => $postsCategory]);
    }
//khi chưa đăng nhập
    public function getPost() {
        $postDay = Post::orderBy('like','desc')->paginate(2);
        $postsTime = Post::where('category_id', $this->getMaxCountCategory()->id)->paginate(2);
        $postsCategory = Post::orderBy('like', 'desc')->paginate(2);
        $categories = Category::all();
        $users = User::all();
        return view('post.list', ["categories" => $categories, "users" => $users, "postsDay" => $postDay, "postsTime" => $postsTime, "postsCategory" => $postsCategory]);
    }

    //xem tất cả bài viết theo số lượng like
    public function getPostByLike() {
        $posts = Post::orderBy('like', 'desc')->paginate(10);
        $categories = Category::all();
        return view('post.like', ["posts" => $posts, "categories" => $categories]);
    }

    //xem bài viết mới nhất
    public function getPostTime() {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        $categories = CategoryController::getCategories();
        return view('post.time', ["posts" => $posts, "categories" => $categories]);
    }

    //xem tất cả bài viết của 1 category nào đó
    public function getAnyCategoryPost() {
        $posts = Post::where('category_id', 6)->paginate(10);
        $categories = Category::all();
        return view('post.film', ["posts" => $posts, "categories" => $categories]);
    }

    public function getMaxCountCategory() {
        $category = Category::select("id")
                ->withCount('posts as postCount')
                ->orderBy('postCount','desc')
                ->first();
        return $category;
    }

    public function getPostByCategory() {
        $category = $this->getMaxCountCategory();
        $category_id = $category->id;
        $posts = Post::where('category_id', $category_id)->paginate(10);
        $categories = Category::all();
        return view('post.category', ["posts" => $posts, "categories" => $categories]);
    }

    public function displayAPost(Request $request, $id) {
        $post = Post::find($id);
        $categories = Category::all();
        return view('post.detail', ["post" => $post, 'categories' => $categories])
    }

    //like a post
    public function setLikeAPostList(Request $request, $id) {
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
