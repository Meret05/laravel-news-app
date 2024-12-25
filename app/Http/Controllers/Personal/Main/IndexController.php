<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $commentsCount = auth()->user()->comments()->count();
        $likesCount = auth()->user()->likedPosts()->count();
        return view('personal.main.index', compact('commentsCount', 'likesCount'));
    }
}
