<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $data = request()->validate([
           'message' => 'required|string',
        ]);
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
