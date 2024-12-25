@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ulanyjy goşmak</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Baş sahypa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Ulanyjylar</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.store') }}" method="POST" class="w-25">
                            @csrf
                            <div class="form-group">
                                <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="ady">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{ old('email') }}" type="text" class="form-control" name="email" placeholder="plany@gmail.com">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Roly</label>
                                <select class="form-control" name="role">
                                    @foreach($roles as $id => $role)
                                        <option
                                            value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">Roly saýla!</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Goş">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
