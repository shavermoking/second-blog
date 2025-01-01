<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class StoreController
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Category::query()->firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}