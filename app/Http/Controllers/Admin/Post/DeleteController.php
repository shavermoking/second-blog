<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class DeleteController extends BaseController
{
    public function __invoke(Post $post): RedirectResponse
    {

        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
