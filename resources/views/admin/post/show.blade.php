@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $post->title }}</h1>
                        <div class="col-sm-6 row">
                            <td><a href="{{ route('admin.post.edit', $post->id) }}"><i
                                        class="text-success fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent text-danger fas fa-trash-alt"></button>
                                </form>
                            </td>
                        </div>
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
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $post->id }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Ady</td>
                                        <td>{{ $post->title }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Mazmuny</td>
                                        <td>{!! $post->content !!}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Kategoriýasy</td>
                                        <td>{{ $post->category->title }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
