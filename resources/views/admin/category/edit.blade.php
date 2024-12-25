@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kategoriýany üýtgetmek</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Baş sahypa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Kategoriýalar</a></li>
                            <li class="breadcrumb-item">{{ $category->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="ady" value="{{ $category->title }}">
                                @error('title')
                                <div class="text-danger">Ady giriz!</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Üýtget">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
