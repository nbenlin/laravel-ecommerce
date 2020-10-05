<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($slug_categoryname) {
        $category = Category::where('slug', $slug_categoryname)->firstOrFail();
        $sub_categories = Category::where('upper_id', $category->id)->get();
        return view('category', compact('category', 'sub_categories'));
    }
}
