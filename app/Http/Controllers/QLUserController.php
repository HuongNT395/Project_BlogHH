<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class QLUserController extends Controller
{
    public function getDanhSach()
    {
        $user = User::all();
    }

    public function getThem()
    {


    }

    public function postThem(Request $request)
    {

    }


    function getXoa(Request $request, $id)
    {

    }

    public function postXoa(Request $request, $id)
    {

    }


    public function getSua($id)
    {


    }

    public function postSua(Request $request, $id){

    }
}
