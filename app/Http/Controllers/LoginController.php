<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\MessageBag;
use App\Http\Requests\UserRequest;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(UserRequest $request)
    {

           $data = [
               'email' =>$request->email,
               'password'=>$request->password,
               'active' =>1,
           ];
            if (Auth::attempt($data)) {
                return redirect()->intended('/admin/theloai/danhsach');
            } else {
                return redirect()->intended('/post/list');
            }
    }
        public function logout(Request $request) {
            Auth::logout();
            return redirect('/');
        }

}
