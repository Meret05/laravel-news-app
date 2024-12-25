<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class StoreController extends Controller
{
    public function __invoke()
    {
        try {
            DB::beginTransaction();
            $data = request()->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'main_image' => 'required|file',
                'category_id' => 'required|integer|exists:categories,id',
            ]);


            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $post = Post::Create($data);

            DB::commit();
        }  catch (ValidationException $e) {
            DB::rollBack(); // Откат транзакции при ошибке валидации

            // Возвращаем пользователю ошибки валидации
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }

        return redirect()->route('admin.post.index');
    }
}
