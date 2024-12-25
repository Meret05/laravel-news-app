@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $user->name }}</h1>
                        <div class="col-sm-6 row">
                            <td><a href="{{ route('admin.user.edit', $user->id) }}"><i
                                        class="text-success fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Ulanyjylar</a></li>
                            <li class="breadcrumb-item">{{ $user->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $user->id }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Ady</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Poçtasy</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>Roly</td>
                                        <td>{{ $user->role }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
