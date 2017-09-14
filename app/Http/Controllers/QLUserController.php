<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class QLUserController extends Controller
{
    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.qluser.danhsach',['user'=>$user]);
    }




    function getXoa(Request $request, $id)
    {
        $user = User::find($id);
        return view('admin.qluser.xoa',['user'=>$user]);
    }


    public function postXoa(Request $request, $id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/qluser/danhsach')->with('thongbao','Xóa người dùng thành công');
    }

}
