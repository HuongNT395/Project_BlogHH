<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public static function getUser() {
        $user = User::all();
        return $user;
    }
}
