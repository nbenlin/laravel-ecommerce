<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomepageController extends Controller
{
    public function index() {
        $categories = Category::whereRaw('upper_id IS NULL')->get();
        return view('homepage', compact('categories'));
    }
}
