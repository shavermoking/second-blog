<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class IndexController
{
    public function __invoke()
    {

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }
}
