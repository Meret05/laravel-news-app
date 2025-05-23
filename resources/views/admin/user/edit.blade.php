@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ulanyjyny üýtgetmek</h1>
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
                    <div class="col-12">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="ady" value="{{ $user->name }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="plany@gmail.com" value="{{ $user->email }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Roly</label>
                                <select class="form-control" name="role">
                                    @foreach($roles as $id => $role)
                                        <option
                                            value="{{ $id }}" {{ $id == $user->role ? 'selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">Roly saýla!</div>
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
