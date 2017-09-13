<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TheLoaiController extends Controller
{
    public function getDanhSach(){
        $category = Category::all();
        return view('admin.theloai.danhsach',['category'=>$category]);
    }

    public function getThem(){
        return view('admin.theloai.them');

    }

    public function postThem(Request $request){
//       echo $request->name;
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:Categories,name'
            ],
            [
                'name.required'=>'Ban chua nhap ten the loai',
                'name.min'=>'Ten the loai phai co do dai tu 3 den 100 ki tu',
                'name.max'=>'Ten the loai phai co do dai tu 3 den 100 ki tu',
                'name.unique'=>'Ten the loai da ton tai'
            ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect('admin/theloai/danhsach')->with('thongbao','Thêm thành công');
    }


    function getXoa(Request $request,$id){
        $category = Category::find($id);
        return view('admin.theloai.xoa', ["category" => $category]);
    }

    public function postXoa(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/theloai/danhsach')->with('thongbao','Xóa thành công');
    }


    public function getSua($id){
        $category = Category::find($id);
        return view('admin.theloai.sua',['category'=>$category]);

    }

    public function postSua(Request $request,$id){
//          echo $request->name;
        $category = Category::find($id);

        $this->validate($request,
            [
            'name'=>'required|unique:Categories,name|min:3|max:100'
        ],
            [
               'name.required'=>'Ban chua nhap ten the loai',
                'name.unique'=>'Ten the loai da ton tai',
                'name.min'=>'Ten the loai phai co do dai tu 3 den 100 ki tu',
                'name.max'=>'Ten the loai phai co do dai tu 3 den 100 ki tu',
        ]);

        $category->name = $request->name;
//        echo $category->name;
        $category->save();
        return redirect('admin/theloai/danhsach')->with('thongbao','Sửa thành công');
    }

}
