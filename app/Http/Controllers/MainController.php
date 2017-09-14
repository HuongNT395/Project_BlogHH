<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
    public function displayHeader() {
        $category = CategoryController::getCategory();
        return view('until.head', ["categories" => $category]);
    }
}
