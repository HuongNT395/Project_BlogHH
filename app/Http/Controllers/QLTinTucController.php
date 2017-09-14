<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class QLTinTucController extends Controller
{
    public function getDanhSach()
    {
        $post = Post::all();
        return view('admin.qltintuc.danhsach',['post'=>$post]);
    }



    function getXoa(Request $request, $id)
    {
        $post = Post::find($id);
        return view('admin.qltintuc.xoa',['post' =>$post]);

    }


    public function postXoa(Request $request, $id){
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/qltintuc/danhsach')->with('thongbao','Bạn đã xóa thành công bài viết');
    }
}
