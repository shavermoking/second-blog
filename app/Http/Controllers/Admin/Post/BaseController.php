<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Services\PostService;

class BaseController extends Controller
{
    public PostService $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

}
