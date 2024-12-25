@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Habary üýtgetmek</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Baş sahypa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Habarlar</a></li>
                            <li class="breadcrumb-item">{{ $post->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" placeholder="ady"
                                       value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger">Ady giriz!</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger">Maglumat giriz!</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Surat</label>
                                <div class="form-group">
                                    <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="main_image">
                                            <label class="custom-file-label"
                                                   for="exampleInputFile">{{ $post->main_image }}</label>
                                        </div>
                                    </div>
                                </div>
                                @error('content')
                                <div class="text-danger">Surat giriz!</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Kateogoriýa</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Üýtget">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
