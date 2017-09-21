<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
    $keyword = $request->keyword;
    $post = Post::where('title','like',"%$keyword%")->orwhere('summary','like',"%$keyword%")
        ->orwhere('content','like',"%$keyword%")->paginate(3);
    return view('user.searchs.search',['post'=>$post],['keyword'=>$keyword]);
    }
}
