@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Poçtaňyzy tassykla') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Täze tassyklama haty poçtaňyza iberildi.') }}
                        </div>
                    @endif

                    {{ __('Girmekden öň poçtaňyzy tassyklaň.') }}
                    {{ __('Eger-de hat gelmedik bolsa') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('täzeden ugratmak üçin basyň') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
