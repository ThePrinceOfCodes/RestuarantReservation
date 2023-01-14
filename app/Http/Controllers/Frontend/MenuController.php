<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::all();

        return view('frontend/menus/index', compact('menus'));
    }
}
