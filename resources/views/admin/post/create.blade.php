@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Habar goşmak</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Baş sahypa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Habarlar</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" placeholder="ady"
                                       value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">Ady giriz!</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">Maglumat giriz!</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <div class="form-group">
                                    <label>Surat</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="main_image">
                                            <label class="custom-file-label" for="exampleInputFile">Surat saýla</label>
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
                                            value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Goş">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
