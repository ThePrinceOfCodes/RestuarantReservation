<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $specials =  Category::where('name','special')->first();

        return view('welcome', compact('specials'));
    }
}
