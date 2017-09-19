<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class InformationUserController extends Controller
{
    public  function getInformation(){
        $user = User::all();
    }

    public  function getSuaInformation(){
        $user = Auth::user();
        return view('user.information.sua',['user'=>$user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public  function postInformation(Request $request){
    $this->validate($request,[
        'name'=>'required|min:3',
    ],[
        'name.required'=>'Bạn chưa nhập tên người dùng',
        'name.min'=>'Tên người dùng phải có ít nhất 3 kí tự',
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;
        $user->avatar = $request->avatar;
        if($request->hasFile('avatar')) {
            $fileName = $request->avatar->getClientOriginalName();
            $request->avatar->storeAS('public/images/avartar',$fileName);
            $user->avatar = $fileName;
        } else {
            return "Not file selected";
        }


    if(isset($request->password)){

        $this->validate($request,[
            'password'=>'required|min:5|max:32',
            'passwordAgain'=>'required|same:password',
        ],[
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min' =>'Mật khẩu phải có ít nhất 5 kí tự',
            'password.max' =>'Mật khẩu chỉ được tối đa 32 kí tự',
            'passwordAgain.required' =>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' =>'Mật khẩu nhập lại chưa khớp',
        ]);
        $user->password = bcrypt($request->password);
    }
        $user->save();
    return redirect('user/information/sua')->with('thongbao','Bạn đã sửa thành công');
    }
}
