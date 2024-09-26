@extends('layouts.start')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center bg-black text-white bg-opacity-25 centered-card card shadow-lg">
                <h3 class="card-header">{{ __('Reset Password') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 form-floating text-black">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">{{ __('Email Address') }}</label>
                        </div>

                        <div class="row mb-3">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                <a
                                    href="{{ url('/') }}"
                                    class="btn btn-outline-light shadow-lg"
                                >
                                    Go home
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
