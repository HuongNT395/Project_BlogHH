<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostUserController extends Controller
{
    public function getDanhSach(){
        $post = Post::where('user_id','=',Auth::user()->id)->get();
        $categories = Category::all();
        return view('user.post.danhsach',['post'=> $post, 'categories' => $categories]);
    }

    public function getThem(){
        $category = Category::all();
        return view('user.post.them',['categories'=>$category]);

    }

    public function postThem(Request $request){
        $this->validate($request,[
            'title'=>'required|min:3',
            'summary'=>'required|min:3',
            'conten'=>'required|min:3',
        ],[
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.min'=>'Tiêu đề phải có ít nhất 3 kí tự',
            'summary.required'=>'Bạn chưa nhập tóm tắt',
            'summary.min'=>'Tóm tắt phải có ít nhất 3 kí tự',
            'content.required'=>'Bạn chưa nhập nội dung',
            'content.min'=>'Nội dung dùng phải có ít nhất 3 kí tự',

        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->conten;
        $post->like = 0;
        $post->image = $request->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg'&& $duoi != 'png'&& $duoi != 'jpeg'){
                return redirect('user/post/them')->with('loi','Bạn chỉ được phép chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_". $name;
            $file->move('storage/images/post',$image);
            $post->image = $image;

        } else {
            $post->image = "";
        }
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
       $post->save();

        return redirect(route('user.post.list'))->with('thongbao','Bạn đã thêm bài thành công');
       

    }


    function getXoa(Request $request,$id){
        $categories = Category::all();
        $post = Post::find($id);
        return view('user.post.xoa',['post'=> $post, 'categories' => $categories]);
    }


    public function postXoa(Request $request, $id){
        $post = Post::find($id);
        $post->delete();
        return redirect(route('user.post.list'));
    }


    public function getSua($id){
        $categories = Category::all();
        $post = Post::find($id);
        return view('user.post.sua',['post'=>$post],['categories'=>$categories]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'summary' => 'required|min:3',
            'conten' => 'required|min:3',
        ], [
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'title.min' => 'Tiêu đề phải có ít nhất 3 kí tự',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'summary.min' => 'Tóm tắt phải có ít nhất 3 kí tự',
            'content.required' => 'Bạn chưa nhập nội dung',
            'content.min' => 'Nội dung dùng phải có ít nhất 3 kí tự',

        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->conten;
        $post->like = 0;
        $post->image = $request->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('user/post/them')->with('loi', 'Bạn chỉ được phép chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4) . "_" . $name;
            $file->move('storage/images/post', $image);
            $post->image = $image;

        } else {
            $post->image = "";
        }
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        $post->save();
        return redirect('user/post/danhsach')->with('thongbao','Bạn đã sửa bài thành công');
    }
}
