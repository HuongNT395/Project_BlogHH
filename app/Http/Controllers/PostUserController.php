<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostUserController extends Controller
{
    public function getDanhSach(){
       $post = Post::all();
        return view('user.post.danhsach',['post'=>$post]);
    }

    public function getThem(){


    }

    public function postThem(Request $request){

    }


    function getXoa(Request $request,$id){

    }

    public function postXoa(Request $request, $id){

    }


    public function getSua($id){

    }

    public function postSua(Request $request,$id){

    }
}
