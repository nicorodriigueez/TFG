<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MasterCategoryController extends Controller
{
    public function storecat(Request $request)
    {
       $validate_data = $request->validate([
    'category_name' => 'required|string|max:100|unique:categories,category_name',
]);

        Category::create($validate_data);

        return redirect()->back();

    }
}
